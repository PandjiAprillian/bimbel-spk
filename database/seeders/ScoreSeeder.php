<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Score::factory()->count(3)->create();
    }
}
