<?php

namespace Database\Factories;

use App\Models\HomeCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeCategory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 6),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
