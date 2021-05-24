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
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(123);

        \App\Models\Score::create(
            [
                'alternative_id' => 1,
                'c1' => 3,
                'c2' => 3,
                'c3' => 3,
                'c4' => 4
            ]
        );

        \App\Models\Score::create(
            [
                'alternative_id' => 2,
                'c1' => 2,
                'c2' => 5,
                'c3' => 3,
                'c4' => 3
            ]
        );

        \App\Models\Score::create(
            [
                'alternative_id' => 3,
                'c1' => 4,
                'c2' => 1,
                'c3' => 5,
                'c4' => 5
            ]
        );
    }
}
