<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'access_admin',]);
        Permission::create(['name' => 'user_read',]);
        Permission::create(['name' => 'user_create',]);
        Permission::create(['name' => 'user_update',]);
        Permission::create(['name' => 'user_delete',]);
        Permission::create(['name' => 'role_read',]);
        Permission::create(['name' => 'role_create',]);
        Permission::create(['name' => 'role_update',]);
        Permission::create(['name' => 'role_delete',]);
        Permission::create(['name' => 'permission_read',]);
        Permission::create(['name' => 'permission_create',]);
        Permission::create(['name' => 'permission_update',]);
        Permission::create(['name' => 'permission_delete',]);
    }
}
