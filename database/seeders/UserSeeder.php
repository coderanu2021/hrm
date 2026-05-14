<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 1
        ]);

        User::create([
            'name' => 'HR',
            'email' => 'hr@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 2
        ]);

        User::create([
            'name' => 'Employee',
            'email' => 'employee@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 3
        ]);
    }
}