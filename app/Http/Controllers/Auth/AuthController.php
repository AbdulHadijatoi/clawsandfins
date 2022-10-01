<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Distributor;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login()
    {
        return view('auth.login.index');
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
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
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

        $data = $request->all();
        // UPLOAD IMAGE:BEGINS
        $image_name = 'users/default_user.jpg';
        if($request->hasfile('image')){
            $file = $request->file('image');
            $image_name = $file->store('users', 'public');
        }
        // UPLOAD IMAGE:ENDS
        $request->request->add(['image' => $image_name]); //add request
        $user = User::create($data);

        if($user){
    
            $request->request->add(['user_id' => $user->id]); //add request
            
            $data = $request->all();
            $distributor = Distributor::create($data);
            if($distributor){
    
                return redirect("/")->withSuccess('Successully submitted the distributor application. Please wait a while until we review your request');
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

        $data = $request->all();
        // UPLOAD IMAGE:BEGINS
        $image_name = 'users/default_user.jpg';
        if($request->hasfile('image')){
            $file = $request->file('image');
            $image_name = $file->store('users', 'public');
        }
        // UPLOAD IMAGE:ENDS
        $request->request->add(['image' => $image_name]); //add request

        $user = User::create($data);
        if($user){
    
            $request->request->add(['user_id' => $user->id]); //add request
            $data = $request->all();
            $investor = Investor::create($data);
            
            if($investor){
                return redirect("/")->withSuccess('Successully submitted the investor application. Please wait a while until we review your request');
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
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
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