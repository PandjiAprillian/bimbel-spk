<?php

namespace Database\Factories;

use App\Models\Alternative;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlternativeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alternative::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $bimbelNames = ["Ganesha", "Primagama", "Kumon"];
        return [
            // 'nama' => $this->faker->unique()->randomElement($bimbelNames),
            // 'alamat' => $this->faker->address
        ];
    }
}
