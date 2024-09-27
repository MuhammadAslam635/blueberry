<?php

namespace Database\Factories;

use App\Models\ProductWeight;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductWeightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductWeight::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 24),
            'weight' => $this->faker->randomFloat(2, 0, 9999),
            'type' => $this->faker->randomElement(['g', 'kg']),
        ];
    }
}
