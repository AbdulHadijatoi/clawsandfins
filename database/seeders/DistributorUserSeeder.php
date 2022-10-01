<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DistributorUserSeeder extends Seeder
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
                'name' => 'Distributor', 
                'image' => 'users/default_user.jpg', 
                'email' => 'distributor@gmail.com',
                'password' => 'password',
                'status' => '1',
            ]
        );
    
        $role = Role::create(['name' => 'distributor']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}