<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class InvestorUserSeeder extends Seeder
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
                'name' => 'Investor', 
                'image' => 'users/default_user.jpg', 
                'email' => 'investor@gmail.com',
                'password' => 'password',
                'status' => '1',
            ],
        );
    
        $role = Role::create(['name' => 'investor']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}