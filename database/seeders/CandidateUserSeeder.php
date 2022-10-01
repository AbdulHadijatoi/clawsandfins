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
        $user = User::create(
            [
                'name' => 'Candidate', 
                'image' => 'users/default_user.jpg', 
                'email' => 'candidate@gmail.com',
                'password' => 'password',
                'status' => '0',
            ]
        );
    
        $role = Role::create(['name' => 'candidate']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}