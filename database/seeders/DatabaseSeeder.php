<?php

namespace Database\Seeders;

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
        $this->call(PostTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(UserTableSeeder::class);  
        \App\Models\User::factory(50)->create();
    }
}
