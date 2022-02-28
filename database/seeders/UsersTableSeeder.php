<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("superadmin2022"),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Tim Broach',
            'email' => 'tbroach@reachbeyond.org',
            'email_verified_at' => now(),
            'password' => Hash::make("tim2022"),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Onilda Broach',
            'email' => 'ocervantes@reachbeyond.org',
            'email_verified_at' => now(),
            'password' => Hash::make("onilda2022"),
            'remember_token' => Str::random(10),
        ]);
    }
}
