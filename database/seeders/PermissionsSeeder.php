<?php

namespace Database\Seeders;

use App\Models\Page;
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
        // Page Permission:begins
        $pages = Page::get();
        if($pages){
            foreach ($pages as $page) {
                Permission::updateOrCreate(['name'=>$page->slug]);
            }
        }
        // Page Permission:ends

        // Distributor permissions:begins
        $permission = Permission::firstOrCreate(["name" => "manage users"]);
        $permission->assignRole("distributor");

        $permission = Permission::firstOrCreate(["name" => "create users"]);
        $permission->assignRole("distributor");

        $permission = Permission::firstOrCreate(["name" => "edit users"]);
        $permission->assignRole("distributor");

        $permission = Permission::firstOrCreate(["name" => "update users"]);
        $permission->assignRole("distributor");

        $permission = Permission::firstOrCreate(["name" => "view users"]);
        $permission->assignRole("distributor");

        $permission = Permission::firstOrCreate(["name" => "delete users"]);
        $permission->assignRole("distributor");
        // Distributor permissions:ends


        // ALL PERMISSIONS FOR ADMIN ROLE
        $allPermissions = Permission::all();
        $adminRole = Role::findByName('admin');
        $adminRole->syncPermissions($allPermissions);
    }
}