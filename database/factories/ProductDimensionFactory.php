<?php

namespace Database\Factories;

use App\Models\ProductDimension;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDimensionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDimension::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 24),
            'width' => $this->faker->randomElement(['sm', 'md', 'lg', 'xl', 'xxl']),
        ];
    }
}
