<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array(
            [
                'title' => 'Cara Membuat Laravel',
                'status' => 'draft',
                'content' => 'Bisa semuannya!',
                'user_id' => '1',
                'categories_id' => '1',
            ],
            [
                'title' => 'Cara Membuat Flutter',
                'status' => 'published',
                'content' => 'Bisa semuannya!',
                'user_id' => '1',
                'categories_id' => '3',
            ],
            [
                'title' => 'Belajar Python',
                'status' => 'published',
                'content' => 'Bisa semuannya!',
                'user_id' => '1',
                'categories_id' => '2',
            ],
        );
        DB::table('posts')->insert($posts);
    }
}