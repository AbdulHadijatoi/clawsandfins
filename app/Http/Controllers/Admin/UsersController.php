<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Distributor;
use App\Models\Investor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display all users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('mail-draft-id')) {
            Session::remove('mail-draft-id');
            Session::remove('userchecked');
            Session::remove('mail-subject');
            Session::remove('mail-message');
        }
        // if(Auth::user() -> hasPermissionTo('view users')) {
            $users = User::latest()->paginate(10);
            return view('admin.users.index', compact('users'));
        // }else{
        //     abort(403);
        // }
    }

    /**
     * Show form for creating user
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {

        return view('admin.users.create',['type'=>$type]);
    }

    /**
     * Store a newly created user
     *
     * @param User $user
     * @param StoreUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, StoreUserRequest $request)
    {
        //For demo purposes only. When creating user or inviting a user
        // you should create a generated random password and email it to the user
        $user->create(array_merge($request->validated(), $request->all()));

        return redirect()->route('users.home')
            ->withSuccess(__('User created successfully.'));
    }

    public function addDistributor(Request $request)
    {
        if (User::where('email', $request->email)->first()) {
            return redirect()->back()->withInput()->withErrors(['mail_used' => 'Email has been used']);
        }

        $request->request->add(['name' => $request->first_name]); //add request
        $request->request->add(['email_verified_at' => '2022-10-01 08:30:07']); //add request
        $request->request->add(['image' => 'users/default_user.jpg']); //add request
        $request->request->add(['status' => 1]); //add request
        $data = $request->all();
        $user = User::create($data);
        if($user){
            $user->assignRole('distributor');
            $distributor = Distributor::create(
                [
                    'user_id' => $user->id, 
                    'company_name' => $request->first_name, 
                    'contact_name' => $request->first_name,
                ]
            );
            if($distributor){
                return redirect()->route('users.distributors',[
                    'userType' => 'distributor'
                ])
                    ->withSuccess(__('User created successfully.'));
            }else{
                return back()->withError('Something went wrong, please try again');
            }
        }else{
            return back()->withError('Something went wrong, please try again');
        }
    }
    
    public function addInvestor(Request $request)
    {
        if (User::where('email', $request->email)->first()) {
            return redirect()->back()->withInput()->withErrors(['mail_used' => 'Email has been used']);
        }

        $request->request->add(['name' => $request->first_name]); //add request
        $request->request->add(['email_verified_at' => '2022-10-01 08:30:07']); //add request
        $request->request->add(['image' => 'users/default_user.jpg']); //add request
        $request->request->add(['status' => 1]); //add request
        $data = $request->all();
        $user = User::create($data);
        if($user){
            $user->assignRole('investor');
            $distributor = Investor::create(
                [
                    'user_id' => $user->id, 
                    'first_name' => $request->first_name, 
                    'last_name' => $request->last_name,
                ]
            );
            if($distributor){
                return redirect()->route('users.investors',[
                    'userType' => 'investor'
                ])
                    ->withSuccess(__('User created successfully.'));
            }else{
                return back()->withError('Something went wrong, please try again');
            }
        }else{
            return back()->withError('Something went wrong, please try again');
        }
    }
    

    /**
     * Show user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Edit user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    /**
     * Update user data
     *
     * @param User $user
     * @param UpdateUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        $user->update($request->validated());

        $user->syncRoles($request->get('role'));

        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Delete user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
        ->withSuccess(__('User deleted successfully.'));
    }

    public function updateUserRole(Request $request)
    {
        // return $request->input();
        $user = User::find($request->id);

        if($request->status == '-1'){
            $user->status = '-1';
        }else if($request->status == '1'){
            $currentRole = $user->getRoleNames()[0];
            if($currentRole == 'investor candidate'){
                $user->syncRoles(['investor']);
            }else if($currentRole == 'distributor candidate'){
                $user->syncRoles(['distributor']);
            }
            $user->status = '1';
        }
        $user->save();
        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    // NEW CODE FROM DANI

    public function distributors()
    {
        $this->clearMailSession();
        // $users = User::with(['distributor'])->whereHas(
        //     'roles',
        //     function ($q) {
        //         $q->where('name', '=', 'distributor');
        //     }
        // )->whereHas('distributor')->latest()->paginate(10);

        return view('admin.users.distributors', [
            'userType' => 'distributor'
        ]);
    }

    public function editDistributors($option)
    {

        return view('admin.users.edit-distributor', [
            'option' => $option,
            'editOption' => ($option == 'all' ? 'All Distributors' : ucfirst(str_replace('-', ' ', $option)) )
        ]);
    }

    public function investors()
    {
        $this->clearMailSession();
        // $users = User::with(['investor'])->whereHas(
        //     'roles',
        //     function ($q) {
        //         $q->where('name', '=', 'investor');
        //     }
        // )->latest()->paginate(10);

        return view('admin.users.investors', [
            'userType' => 'investor'
        ]);
    }

    public function editInvestors($option)
    {

        return view('admin.users.edit-investor', [
            'option' => $option,
            'editOption' => ($option == 'all' ? 'All Investors' : ucfirst(str_replace('-', ' ', $option)))
        ]);
    }

    public function clearMailSession()
    {
        if (session()->has('mail-draft-id')) {
            Session::remove('mail-draft-id');
            Session::remove('userchecked');
            Session::remove('mail-subject');
            Session::remove('mail-message');
        }
    }
}
