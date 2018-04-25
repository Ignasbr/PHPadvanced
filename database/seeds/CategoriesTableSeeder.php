<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            \App\Models\Category::create(['name' => 'Cars']);
            \App\Models\Category::create(['name' => 'Technology']);
            \App\Models\Category::create(['name' => 'Photography']);
            \App\Models\Category::create(['name' => 'Sport']);
            \App\Models\Category::create(['name' => 'Nature']);
        }
    }
}
