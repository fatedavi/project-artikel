<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'User Perpustakaan',
            'email' => 'dapi@example.com',
            'password' => bcrypt('password123'), // harus bcrypt untuk hashing password
            'role' => 'user'
        ]);
 
    }
}
