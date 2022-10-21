<?php
  
namespace App\Http\Controllers\Auth;

use App\CentralLogics\Helpers;
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
        if($user && $user->getRoleNames()[0] != 'admin'){
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended()
                            ->withSuccess('You have Successfully loggedin');
            }
        }
  
        return redirect("login")->withError('Oppes! You have entered invalid credentials');
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
                return redirect()->route('users.index')
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
            $user->assignRole('distributor');
            $request->request->add(['user_id' => $user->id]); //add request
            $data = $request->all();
            $distributor = Distributor::create($data);
            if($distributor){
                // $this->sendInvoiceMail($order->order_number, $order);
                return redirect("/login")->withSuccess('Successully submitted the distributor application. Please wait a while until we review your request');
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
            $user->assignRole('investor');
            $request->request->add(['user_id' => $user->id]); //add request
            $data = $request->all();
            $investor = Investor::create($data);
            if($investor){
                // $this->sendInvoiceMail($order->order_number, $order);
                return redirect("/login")->withSuccess('Successully submitted the investor application. Please wait a while until we review your request');
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
    public function postEditInvestor(UpdateInvestorRequest $request)
    {
        $id= auth()->user()->id;
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
            if ($user->wasChanged() || $investor->wasChanged()) {
                return redirect("/account")->withSuccess('Data has been updated');
            }else{
                return redirect("/account");
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
        $id = auth()->user()->id;
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
            if ($user->wasChanged() || $distributor->wasChanged()) {
                return redirect("/account")->withSuccess('Data has been updated');
            } else {
                return redirect("/account");
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
  
        return Redirect('login');
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