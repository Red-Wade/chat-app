<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seeder para crear usuarios iniciales.
     */
    public function run(): void
    {
        $usuaris = [
            ['name' => 'vane', 'username' => 'Chibivane#2728', 'email' => 'vane@vane.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'adri', 'username' => 'wade079#0057', 'email' => 'adri@adri.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'alex', 'username' => 'Aleix#7676', 'email' => 'alex@alex.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
            ['name' => 'Select', 'username' => 'Select#1141', 'email' => 'Select@Select.com', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'remember_token' => Str::random(10)],
        ];

        foreach ($usuaris as $usuari) {
            DB::table('users')->insert($usuari);
        }
        
        User::factory()->count(5)->create();
    }
}
