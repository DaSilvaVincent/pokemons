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
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'name' => "Vincent DaSilva",
            'admin' => true,
            'email' => "vin--cent@hotmail.fr",
            'email_verified_at' => now(),
            'password' => Hash::make('Peper123'),
            'remember_token' => Str::random(10),
        ])->create();

        User::factory([
            'name' => "Thimothée Lepetz",
            'admin' => false,
            'email' => "thimothee@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('Thimo123'),
            'remember_token' => Str::random(10),
        ])->create();

        User::factory(10)->create();
    }
}
