<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// path to User Class
use App\Models\User;

// path to Hash Class
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // a new admin user
        User::create([
            'first_name' => 'jinal',
            'last_name'  => 'rathod',
            'name'   => 'admin',
            'email'      => 'admin@phpeasy.com',
            'phone_number' => '9999999999',
            'password'   => Hash::make('admin'),
            'role'       => 'admin'
        ]);

        // a new user
        User::create([
            'first_name' => 'jeet',
            'last_name'  => 'desai',
            'name'   => 'jeet',
            'email'      => 'jeet@phpeasy.com',
            'phone_number' => '8888888888',
            'password'   => Hash::make('jeet'),
            'role'       => 'user'
        ]);

        // a new user
        User::create([
            'first_name' => 'kevin',
            'last_name'  => 'patel',
            'name'   => 'kevin',
            'email'      => 'kevin@phpeasy.com',
            'phone_number' => '7777777777',
            'password'   => Hash::make('kevin'),
            'role'       => 'user'
        ]);
    }
}
