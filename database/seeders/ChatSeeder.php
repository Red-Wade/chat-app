<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chat;
use DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create(['name' => 'Chat 1']);
        Chat::create(['name' => 'Chat 2']);
        Chat::create(['name' => 'Chat 3']);
    }
}
