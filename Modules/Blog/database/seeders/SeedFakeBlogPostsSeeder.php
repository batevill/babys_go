<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedFakeBlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Post 1',
                'content' => 'Content 1',
            ],
            [
                'title' => 'Post 2',
                'content' => 'Content 2',
            ],
            [
                'title' => 'Post 3',
                'content' => 'Content 3',
            ],
        ]);
    }
}
