<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Blog\Database\Seeders\BlogDatabaseSeeder;
use Modules\Content\Database\Seeders\ContentDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'phone' => '+998901234567',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            DummyDataSeeder::class,
            BlogDatabaseSeeder::class,
            ContentDatabaseSeeder::class,
        ]);
    }
}
