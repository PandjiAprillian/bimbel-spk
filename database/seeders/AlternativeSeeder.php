<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed('123');

        $bimbelNames = ["Ganesha", "Primagama", "Kumon"];
        for($i = 0; $i < 3; $i++) {
            \App\Models\Alternative::create(
                [
                    'nama' => $bimbelNames[$i],
                    'alamat' => $faker->address
                ]
            );
        }
    }
}
