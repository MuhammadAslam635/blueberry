<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 24),
            'order_id' => $this->faker->numberBetween(1, 30),
            'qty' => $this->faker->numberBetween(0, 100),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'review' => $this->faker->randomElement(['1', '0']),
        ];
    }
}
