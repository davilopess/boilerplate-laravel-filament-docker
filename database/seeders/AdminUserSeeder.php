<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@hotmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $adminRole = Role::findByName('Admin');
        $user->assignRole($adminRole);
    }
}
