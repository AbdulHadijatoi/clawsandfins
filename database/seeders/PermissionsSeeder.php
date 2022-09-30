<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $permissions = Permission::insert([
            ['name' => 'add user'],
            ['name' => 'delete user'],
            ['name' => 'update user'],
        ]);

        $role = Role::find(2);
   
        $role->syncPermissions($permissions);
    }
}