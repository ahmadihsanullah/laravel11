<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Ahmad Ihsanullah",
            'username' => "ahmad-ihsan",
            'email' => "ahmad@gmail.com",
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),
            'remember_token' => Sebtr::random(10),
        ]);
        User::factory(5)->create();
    }
}
