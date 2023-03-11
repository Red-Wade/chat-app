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
        Chat::factory()->count(3)->create();

        $users = User::all();
        $chats = Chat::all();

        foreach ($chats as $chat) {
            $chat->users()->attach($users->random(2));
        }

        $knownChat = Chat::create([
            'name' => 'Known Chat',
        ]);
        $knownChat->users()->attach($users->where('username', 'Select#1141'));
        $knownChat->users()->attach($users->where('username', 'wade079#0057'));
    }
}
