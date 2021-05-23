<?php

namespace Database\Factories;

use App\Models\Weight;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Weight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "w1" => 0.4,
            "w2" => 0.3,
            "w3" => 0.2,
            "w4" => 0.1
        ];
    }
}
