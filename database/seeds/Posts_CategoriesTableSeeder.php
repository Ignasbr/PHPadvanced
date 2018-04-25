<?php

use Illuminate\Database\Seeder;

class Posts_CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
//        $posts = App\Models\Post::all();
//
//        App\Models\Category::all()->each(function ($category) use ($posts) {
//            $category->posts()->attach(
//                $posts->random(rand(1, 3))->pluck('id')->toArray());
//        });

        $categories = App\Models\Category::all();

        App\Models\Post::all()->each(function ($post) use ($categories) {
            $post->category()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray());
        });
    }
}

