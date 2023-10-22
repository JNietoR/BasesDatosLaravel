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

        \App\Models\Category::factory(5)->create();
        \App\Models\Thread::factory(40)->create();
        \App\Models\Comment::factory(80)->create();

        \App\Models\Tag::factory(18)->create();

    }
}
