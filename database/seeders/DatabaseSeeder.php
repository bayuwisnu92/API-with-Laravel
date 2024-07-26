<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Category::factory(3)->create();

        \App\Models\User::factory()->create([
            'name' => 'Bayu wisnu aji',
            'email' => 'bayuwisnu9294@gmail.com',
            'password' => 'hasnihasni92'
        ]);
    }
}
