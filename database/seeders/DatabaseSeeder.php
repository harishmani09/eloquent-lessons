<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::factory()->create([
             'name' => 'John Doe'
         ]);
         Post::factory(10)->create([
             'user_id' => $user->id
         ]);
         Comment::factory(10)->create();
    }
}
