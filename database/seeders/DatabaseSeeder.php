<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create()([
        //     'name' => 'Test User',
        //     'username' => 'username',
        //     'email' => 'email@exampel.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        // Category::create()([
        //     'name' => 'Category 1',
        //     'slug' => Str::slug('Category 1'),
        // ]);

        // Post::create()([
        //     'title' => 'Post 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => Str::slug('Post 1'),
        //     'body' => 'This is the body of Post 1',
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}