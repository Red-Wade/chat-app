<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chat;
use App\Models\User;
use DB;
use Illuminate\Support\Collection;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        Chat::factory()->count(1)->hasAttached($users->random(2))->create();        
        Chat::factory()->count(1)->hasAttached($users->random(2))->create();        
        Chat::factory()->count(1)->hasAttached($users->random(2))->create();        

        $knownChat = Chat::create([
            'name' => 'Known Chat',
        ]);
        $knownChat->users()->attach($users->where('username', 'Select#1141'));
        $knownChat->users()->attach($users->where('username', 'wade079#0057'));
    }
}
