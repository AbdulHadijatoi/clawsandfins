<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'distributor']);
        Role::create(['name' => 'investor']);
        Role::create(['name' => 'investor candidate']);   
        Role::create(['name' => 'distributor candidate']);   
        Role::create(['name' => 'unknown visitor']);   
    }
}