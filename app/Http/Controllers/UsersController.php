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
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
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
        $user= auth()->user();
        $userRole= $user->roles->pluck('name')->toArray()[0];
        $userData= ("App\Models" . ($userRole == 'distributor' ? '\Distributor' : '\Investor'))::where('user_id', auth()->user()->id)->first();
        $other=array();
        if($userData->country && $userData->city){
            $other= [
                'country'=> (object) Country::where('id', $userData->country)->first()->toArray(),
                'city'=> (object) City::where('id', $userData->city)->first()->toArray(),
            ];
        }
        return view('account/'.($userRole == 'distributor' ? 'distributor' : 'investor'),[
            'user'=>$user,
            'userData'=> $userData,
            'other'=> (object) $other,
        ]);
    }

    
}