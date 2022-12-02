<?php

namespace App\Http\Controllers\Auth;

use App\CentralLogics\Helpers;
use App\Events\EmailVerified;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateDistributorRequest;
use App\Http\Requests\UpdateInvestorRequest;
use App\Models\Distributor;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Traits\Otp;
use App\Traits\SendMail;
use Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    use SendMail, Otp;
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login()
    {
        return view('auth.login.index');
    }
    public function adminLogin()
    {
        return view('admin.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function becomeDistributor()
    {
        return view('auth.register.become-distributor');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function becomeInvestor()
    {
        return view('auth.register.become-investor');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $user = User::where('email',$request->email)->first();
        if($user->status == '-1'){
            return redirect("login")
                            ->withError('Your account is rejected, please contact support');
        }
        if($user && $user->getRoleNames()[0] != 'admin'){
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended()
                            ->withSuccess('You have Successfully loggedin');
            }
        }

        return redirect("login")->withInput()->withError('Oppes! You have entered invalid credentials');
    }

    public function adminPostLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $user = User::where('email',$request->email)->first();
        if($user && $user->getRoleNames()[0] == 'admin'){
            if (Auth::attempt($credentials)) {
                return redirect()->route('users.distributors')
                            ->withSuccess('You have Successfully loggedin');
            }
        }

        return redirect("login")->withError('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postBecomeDistributor(StoreUserRequest $request)
    {
        if (User::where('email', $request->email)->first()) {
            return redirect()->back()->withInput()->withErrors(['mail_used' => 'Email has been used']);
        }
        // 'attachments.*' => 'mimes:zip,rar,jpeg,jpg,png,gif,svg,pdf,txt,doc,docx,application/octet-stream,audio/mpeg,mpga,mp3,wav|max:204800', //only allow this type extension file.
        $request->request->add(['name' => $request->company_name]); //add request
        $request->request->add(['status' => 0]); //add request
        $data = $request->all();
        // UPLOAD IMAGE:BEGINS
        $image_name = 'users/default_user.jpg';
        if($request->hasfile('image')){
            $file = $request->file('image');
            $image_name = $file->store('users', 'public');
        }
        // UPLOAD IMAGE:ENDS
        $data['image'] = $image_name;
        $user = User::create($data);
        if($user){
            $token = $this->generateToken($user);
            $user->assignRole('distributor');
            $request->request->add(['user_id' => $user->id]); //add request
            $data = $request->all();
            $distributor = Distributor::create($data);
            if($distributor){
                // $this->sendInvoiceMail($order->order_number, $order);
                $this->sendConfirmEmail($user);
                return redirect()->route("confirm-email", ['token' => $token]);
                // return redirect("/login")->withSuccess('Successully submitted the distributor application. Please wait a while until we review your request');
            }else{
                return back()->withError('Something went wrong, please try again');
            }
        }else{
            return back()->withError('Something went wrong, please try again');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postBecomeInvestor(StoreUserRequest $request)
    {
        if (User::where('email', $request->email)->first()) {
            return redirect()->back()->withInput()->withErrors(['mail_used' => 'Email has been used']);
        }

        $request->request->add(['name' => $request->first_name]); //add request
        $request->request->add(['status' => 0]); //add request
        $data = $request->all();
        // UPLOAD IMAGE:BEGINS
        $image_name = 'users/default_user.jpg';
        if($request->hasfile('image')){
            $file = $request->file('image');
            $image_name = $file->store('users', 'public');
        }
        // UPLOAD IMAGE:ENDS
        $data['image'] = $image_name;
        $user = User::create($data);

        if($user){
            $token= $this->generateToken($user);
            $user->assignRole('investor');
            $request->request->add(['user_id' => $user->id]); //add request
            $data = $request->all();
            $investor = Investor::create($data);

            if($investor){
                $this->sendConfirmEmail($user);
                return redirect()->route("confirm-email", ['token' => $token]);
            }else{
                return back()->withInput()->withErrors(['error','Something went wrong, please try again']);
            }
        }else{
            return back()->withInput()->withErrors(['error', 'Something went wrong, please try again']);
        }
    }

    public static function generateToken($user){
        return sha1($user->id . '.' . $user->email);
    }

    public static function getUserWithToken($token){
        return User::where(DB::raw('SHA1(CONCAT(id,".",email))'),'=', $token)->first();
    }

    public function confirmEmail(Request $request){
        if(!$request->token){
            return Redirect::route('login');
        }
        $user = AuthController::getUserWithToken($request->token);
        if($user->hasVerifiedEmail()){
            return redirect()->route('home.index');
        }
        return view('auth.register.confirm-email',compact('user'));
        // return view('mail.email-confirmation', ['name' => "Rahmat Dani Zaki", 'url' => url("confirm-email/activation/")]);
    }

    public function emailActivation($token){
        $user = User::where(DB::raw('SHA1(CONCAT(id,".",email,".",updated_at))'), $token)->first();
        $status = 0;
        if($user){
            $verified_at= date('Y-m-d H:i:s');
            $hours = (strtotime($verified_at) - strtotime($user->updated_at)) / (60 * 60);
            if($hours > 1){
                $status = 2;
            }else{
                $user->email_verified_at = $verified_at;
                $verified=$user->save();
                if($verified){
                    $status = 1;
                }
            }
        }else{
            $status = 0;
        }

        return view('auth.register.email-activation', compact('status'));
    }

    public function sendConfirmEmail($user)
    {
        $activation_token = sha1($user->id . '.' . $user->email . '.' . $user->updated_at);
        $address = config("mail.from.address");
        $subject = "Confirm your Email Address for Pete's Claws and Fins";
        try {
            Mail::send('mail.email-confirmation', ['name' => $user->name, 'url' => url("confirm-email/activation/" . $activation_token)], function ($m) use ($user, $subject, $address) {
                $m->from($address, "Pete's Claws and Fins");
                $m->to($user->email)->subject($subject);
            });
            return true;
        } catch (\Exception $e) {
           return false;
        }
    }

    public function resendEmailActivation($token){
        $user=$this->getUserWithToken($token);
        if($user){
            $user->updated_at= date('Y-m-d H:i:s');
            $updated=$user->save();
            $sended = $updated? $this->sendConfirmEmail($user) : null;
            if($sended){
                $data['success'] = true;
            }else{
                $data['error'] = 1;
            }
        }else{
            $data['error'] = 2;
        }

        return response()->json($data);
    }

    public function verificationNotice()
    {
        $user = auth()->user();
        $token= $this->generateToken($user);
        return view('auth.register.verification-notice', compact('token'));
    }

    public function getVerified(Request $request)
    {
        $user = (AuthController::getUserWithToken($request->token)) ?? null;
        if ($request->listenEmailVerified && $user) {
            $data['verified'] = $user->email_verified_at;
            return response()->json($data);
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postEditInvestor(UpdateInvestorRequest $request)
    {
        $id = Helpers::isAdmin() ? request()->id : auth()->user()->id;
        if($request->first_name){
            $request->request->add(['name' => $request->first_name]);
        }

        $data = $request->all();
        $image_name = 'users/default_user.jpg';

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $image_name = $file->store('users', 'public');
            $data['image'] = $image_name;
        } else if ($request->remove_image) {
            $data['image'] = $image_name;
        }

        $user=User::find($id);
        $user->update($data);

        $investorId= Investor::where('user_id',$id)->first()->id;
        $investor=Investor::find($investorId);
        $investor->update($data);
        if ($user && $investor) {
            $redirectPath = "/account" . (Helpers::isAdmin() ? "/" . $id : null);
            if ($user->wasChanged() || $investor->wasChanged()) {
                return redirect($redirectPath)->withSuccess('Data has been updated');
            }else{
                return redirect($redirectPath);
            }
        } else {
            return back()->withError('Something went wrong, please try again');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postEditDistributor(UpdateDistributorRequest $request)
    {
        $id = Helpers::isAdmin()? request()->id : auth()->user()->id;
        if ($request->first_name) {
            $request->request->add(['name' => $request->company_name]);
        }

        if($request->location_disclose){
            $request->request->add(['latitude' => 0, 'longitude' => 0, 'location_is_correct' => '']);
        }else{
            $request->request->add(['location_disclose' => '0']);
        }

        $data = $request->all();
        $image_name = 'users/default_user.jpg';

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $image_name = $file->store('users', 'public');
            $data['image'] = $image_name;
        } else if ($request->remove_image) {
            $data['image'] = $image_name;
        }

        $user = User::find($id);
        $user->update($data);

        $distributorId = Distributor::where('user_id', $id)->first()->id;
        $distributor = Distributor::find($distributorId);
        $distributor->update($data);
        if ($user && $distributor) {
            $redirectPath = "/account" . ( Helpers::isAdmin()? "/".$id : null );
            if ($user->wasChanged() || $distributor->wasChanged()) {
                return redirect($redirectPath)->withSuccess('Data has been updated');
            } else {
                return redirect($redirectPath);
            }
        } else {
            return back()->withError('Something went wrong, please try again');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        // 'image' => $data['image'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect(request()->is('admin*')?'admin/login':'login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function forgotPassword()
    {
        return view('auth.login.forgot-password');
    }
}
