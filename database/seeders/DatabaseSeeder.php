<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Questo per andare a popolare le tabelle in una volta sola, senza lanciare 3 comandi di seeding diversi
        // $this->call([
        //     PostSeeder::class,
        //     TypeSeeder::class,
        //     TagSeeder::class
        // ]);

    }
}
