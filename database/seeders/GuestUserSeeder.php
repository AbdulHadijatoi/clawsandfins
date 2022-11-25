<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class GuestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate([
            'name' => 'Visitor', 
            'image' => 'users/default_user.jpg', 
            'email' => 'visitor@clawsandfins.com',
            'password' => 'password',
            'email_verified_at' => '2022-10-01 08:30:07',
            'status' => '1',
        ]);
    
        $role = Role::where('name', 'unknown visitor')->first();
     
        $user->assignRole([$role->id]);
    }
}