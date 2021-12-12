<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
 use App\Models\User;
 use App\Models\Category;
 use App\Models\Post;

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
        Post::truncate();

        Category::truncate();


        // Post::factory()->create();
    // $user=User::factory()->create();

    // $personal = Category::create([
    //     'name' => 'personal',
    //     'slug' =>'personal'

    // ]);
    // $work = Category::create([
    //     'name' => 'work',
    //     'slug' =>'work'

    // ]);
    // $family = Category::create([
    //     'name' => 'family',
    //     'slug' =>'family'

    // ]);

    // Post::create([
    //     'user_id' => $user->id,
    //     'category_id'=>$family->id,
    //     'title'   => 'My family post',
    //     'slug' =>'my-first-post',
    //     'excerpt' =>'Lorem ipsum dolor sit amet',
    //     'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of '
    // ]);
    // Post::create([
    //     'user_id' => $user->id,
    //     'category_id'=>$work->id,
    //     'title'   => 'My work post',
    //     'slug' =>'my-second-post',
    //     'excerpt' =>'Lorem ipsum dolor sit amet',
    //     'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of '
    // ]);
    // Post::create([
    //     'user_id' => $user->id,
    //     'category_id'=>$personal->id,
    //     'title'   => 'My personal post',
    //     'slug' =>'my-third-post',
    //     'excerpt' =>'Lorem ipsum dolor sit amet',
    //     'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of '
    // ]);
    }
}
