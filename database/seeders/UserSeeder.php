<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Misel',
            'username' => 'mshell',
            'email' => 'misel@localhost',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Reynaldo',
            'username' => 'rey.aldo',
            'email' => 'rey@localhost',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'I Kecil Rama',
            'username' => 'ram.di',
            'email' => 'rama@localhost',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Malvera Lolang',
            'username' => 'malvr_',
            'email' => 'pera@localhost',
            'password' => bcrypt('password')
        ]);
    }
}
