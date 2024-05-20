<?php

namespace Database\Seeders;

use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory(2)->unverified()->create();
        // \App\Models\Task::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     CustomerSeeder::class
        // ]);

        Book::factory(10)->create()->each(function ($book){
            $numReviews=random_int(5,20);

            Review::factory()->count($numReviews)
            ->good()
            ->for($book)
            ->create();
        });

        Book::factory(10)->create()->each(function ($book){
            $numReviews=random_int(5,20);

            Review::factory()->count($numReviews)
            ->average()
            ->for($book)
            ->create();
        });

        Book::factory(10)->create()->each(function ($book){
            $numReviews=random_int(5,20);

            Review::factory()->count($numReviews)
            ->bad()
            ->for($book)
            ->create();
        });
    }
}
