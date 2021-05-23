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
        $this->call(AlternativeSeeder::class);
        $this->call(ScoreSeeder::class);
        $this->call(WeightSeeder::class);
        $this->call(UserSeeder::class);
    }
}
