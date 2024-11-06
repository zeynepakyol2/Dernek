<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $Adminrole = Role::firstOrCreate(['name' => 'Admin']);
        $Guestrole = Role::firstOrCreate(['name' => 'Guest']);


        $permissions = [
            'events.edit',
            'campaigns.edit',
            'events.create',
            'campaigns.create',
            'roles.index',
            'roles.list',
            'roles.edit',
            'roles.destroy',
            'roles.create',
            'permission.index',
            'permission.list',
            'permission.edit',
            'permission.destroy',
            'permission.create',
            'users.index',
            'users.list',
            'users.create',
            'users.edit',
            'campaigns.index',
            'campaigns.list',
            'campaigns.create',
            'campaigns.edit',
            'campaigns.destroy',
            'events.list',
            'events.create',
            'events.destroy',
            'admin.settings',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        $Adminrole->syncPermissions(Permission::all());

        $user = User::find(1);
        $user->assignRole('Admin');
        $user->givePermissionTo($Adminrole->getAllPermissions());


    }
}
