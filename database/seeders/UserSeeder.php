<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Perpustakaan',
            'email' => 'user@example.com',
            'password' => bcrypt('password123'), // harus bcrypt untuk hashing password
            'role' => 'admin'
        ]);
 
    }
}
