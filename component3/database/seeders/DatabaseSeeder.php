<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Product::truncate();
        // Category::truncate();
        \App\Models\Product::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::Create([
        //     'name'=>'Book',
        //     'slug'=>'book'
        // ]);

        // Category::Create([
        //     'name'=>'Movie',
        //     'slug'=>'movie'
        // ]);
    }
}
