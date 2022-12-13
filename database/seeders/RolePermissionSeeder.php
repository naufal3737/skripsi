<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
            ]
        );

        $role_admin = Role::create(['name' => 'admin']);
        $role_auditor = Role::create(['name' => 'auditor']);
        $role_user = Role::create(['name' => 'user']);

        $permission = Permission::create(['name' => 'user management']);
        $permission = Permission::create(['name' => 'use audit']);
        $permission = Permission::create(['name' => 'validate']);

        $role_admin->givePermissionTo('user management');
        $role_auditor->givePermissionTo('validate');
        $role_user->givePermissionTo('use audit');

        $admin->assignRole('admin');

    }
}
