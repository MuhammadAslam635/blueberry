<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(2, 50),
            'total' => $this->faker->randomFloat(0, 0, 9999999999.),
            'subtotal' => $this->faker->randomFloat(0, 0, 9999999999.),
            'tax' => $this->faker->randomFloat(0, 0, 9999999999.),
            'discount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'address' => $this->faker->text(),
            'city' => $this->faker->city(),
            'state' => $this->faker->word(),
            'status' => $this->faker->randomElement(['pending', 'process', 'dispatch', 'delivered', 'cancel']),
            'cancel_date' => $this->faker->date(),
        ];
    }
}
