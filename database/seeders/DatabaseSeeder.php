<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // AdminSeeder::class,
            // ArticleSeeder::class,
            // SubjectAreaSeeder::class,
            // Uncomment the line below to run the large article seeder
            // Warning: This will create 100,000 records and may take a while
            LargeArticleSeeder::class,
            // EditorialBoardSeeder::class,
        ]);
    }
}
