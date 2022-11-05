<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CandidateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investorUser = User::create(
            [
                'name' => 'Investor Candidate', 
                'image' => 'users/default_user.jpg', 
                'email' => 'investorcandidate@gmail.com',
                'password' => 'password',
                'status' => '0',
            ]
        );
        $distributorUser = User::create(
            [
                'name' => 'Distributor Candidate', 
                'image' => 'users/default_user.jpg', 
                'email' => 'distributorcandidate@gmail.com',
                'password' => 'password',
                'status' => '0',
            ]
        );
    
        $investorCandidateRole = Role::create(['name' => 'investor candidate']);
        $distributorCandidateRole = Role::create(['name' => 'distributor candidate']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $investorCandidateRole->syncPermissions($permissions);
        $distributorCandidateRole->syncPermissions($permissions);
     
        $investorUser->assignRole([$investorCandidateRole->id]);
        $distributorUser->assignRole([$distributorCandidateRole->id]);
    }
}