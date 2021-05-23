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
        \App\Models\Alternative::factory()->count(3)->create();
    }
}
