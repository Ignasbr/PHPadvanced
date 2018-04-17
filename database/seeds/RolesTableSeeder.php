<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create(['name' => 'User']);
        \App\Models\Role::create(['name' => 'Mod']);
        \App\Models\Role::create(['name' => 'Admin']);
    }
}
