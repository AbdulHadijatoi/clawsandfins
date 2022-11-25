<?php

use App\Models\Page;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

if (!function_exists('getPermissionsByRole')) {
    function getPermissionsByRole($roleName){
        $role_permissions = Role::with('permissions:id,name')->where('name',$roleName)->get();
        foreach ($role_permissions as $permission) {
            $role = Role::findById($permission->id)->name;
            $temp_permissions = [];
            foreach ($permission->permissions as $p) {
                $temp_permissions[] = $p->name;
            }
            $permissions[] = ['role'=>$role,'permissions'=>$temp_permissions];
        }
        return $permissions;
    }
}

if (!function_exists('getAllRolePermissions')) {
    function getAllRolePermissions(){
        $role_permissions = Role::with('permissions:id,name')->get();
        foreach ($role_permissions as $permission) {
            $role = Role::findById($permission->id)->name;
            $temp_permissions = [];
            foreach ($permission->permissions as $p) {
                $temp_permissions[] = $p->name;
            }
            $permissions[] = ['role'=>$role,'permissions'=>$temp_permissions];
        }
        return $permissions;
    }
}

if (!function_exists('giveAllPermissionsToRole')) {
    function giveAllPermissionsToRole($roleName){
        $allPermissions = Permission::all();
        $adminRole = Role::findByName($roleName);
        $adminRole->syncPermissions($allPermissions);
    }
}

if (!function_exists('givePermissionToRole')) {
    function givePermissionToRole($roleName,$permission){
        if($roleName && $permission){
            $role = Role::findByName($roleName);
            $role->givePermissionTo($permission);
        }
    }
}

if (!function_exists('revokeAllPagesPermissionsByRole')) {
    function revokeAllPagesPermissionsByRole($roleName){
        $pages = Page::get(['slug']);
        $role = Role::where('name',$roleName)->first();
        foreach ($pages as $page) {
            $role->revokePermissionTo($page->slug);
        }
    }
}

if (!function_exists('syncPagesPermissions')) {
    function syncPagesPermissions(){
        $pages = Page::get();
        if($pages){
            foreach ($pages as $page) {
                Permission::updateOrCreate(['name'=>$page->slug]);
            }
        }
        return redirect()->back()
            ->withSuccess(__('All pages permissions are synced successfully.'));
    }
}