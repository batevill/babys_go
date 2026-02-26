<?php

namespace Modules\Content\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedFakeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('content')->insert([
            [
                'title' => 'Content 1',
                'content' => 'Content 1',
            ],
            [
                'title' => 'Content 2',
                'content' => 'Content 2',
            ],
            [
                'title' => 'Content 3',
                'content' => 'Content 3',
            ],
        ]);
    }
}
