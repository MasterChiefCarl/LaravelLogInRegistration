<?php

namespace Database\Seeders;

use \App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'id' => 001,
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('testuser'),
        ]);
        
        User::factory()->create([
            'id' => 002,
            'name' => 'Carl Garces',
            'username' => 'carlgarces',
            'email' => 'carl@garces.com',
            'password' => bcrypt('carlgarces'),
        ]);

    }
}
