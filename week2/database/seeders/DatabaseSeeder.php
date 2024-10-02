<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'Thariq Ivan',
        //     'username' => 'vans',
        //     'email' => 'asd@asd.casd',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);
        
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::create([
        //     'title' => 'My First Post',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'my-first-post',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        // ]);

        // Post::factory(50)->create();

        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
        ]);
     
        Post::factory(150)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}

