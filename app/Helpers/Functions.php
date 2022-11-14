<?php

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
