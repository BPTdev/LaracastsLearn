<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        $users = User::factory(1)->create();
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Familiy',
            'slug' => 'familiy'
        ]);
        Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'slug' => 'post1',
            'title' => 'My First Post',
            'excerpt' => Str::random(29),
            'body' => '<p>' . Str::random(200) . '</p>'
        ]);
        Post::create([
            'user_id' => 1,
            'category_id' => 2,
            'slug' => 'post2',
            'title' => 'My Second Post',
            'excerpt' => Str::random(29),
            'body' => '<p>' . Str::random(200) . '</p>'
        ]);
        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'slug' => 'post3',
            'title' => 'My Third Post',
            'excerpt' => Str::random(29),
            'body' => '<p>' . Str::random(200) . '</p>'
        ]);
    }
}
