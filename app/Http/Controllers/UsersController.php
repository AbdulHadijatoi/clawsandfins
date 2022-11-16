<?php

namespace App\Http\Controllers;

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
    public function clearMailSession()
    {
        if (session()->has('mail-draft-id')) {
            Session::remove('mail-draft-id');
            Session::remove('userchecked');
            Session::remove('mail-subject');
            Session::remove('mail-message');
        }
    }
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        
        // if(Auth::user() -> hasPermissionTo('view users')) {
            $users = User::with(['distributor'])->whereHas(
                'roles',
                function ($q) {
                    $q->where('name', '!=', 'candidate')
                        ->where('name', '!=', 'admin');
                }
            )->latest()->paginate(10);

            return view('admin.users.index', compact('users'));
        // }else{
        //     abort(403);
        // }
    }
    
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

    /**
     * Show form for creating user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        //
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
        //
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
        //
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
        //
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
        //
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
        //
    }

    public function accountInfo($id = null)
    {
        if($id){
            $user = User::find($id);
        }else{
            $user= auth()->user();
            $id= auth()->user()->id;
        }
        $userRole= $user->roles->pluck('name')->toArray()[0];
        $userData= ("App\Models" . ($userRole == 'distributor' ? '\Distributor' : '\Investor'))::where('user_id', $id)->first();
        $other=array();
        if($userData->country && $userData->city){
            $other= [
                'country'=> (object) Country::where('id', $userData->country)->first()->toArray(),
                'city'=> (object) City::where('id', $userData->city)->first()->toArray(),
            ];
        }
        return view('account/'.($userRole == 'distributor' ? 'distributor' : 'investor'),[
            'id'=>$id,
            'user'=>$user,
            'userData'=> $userData,
            'userRole'=> $userRole,
            'other'=> (object) $other,
        ]);
    }

    
}