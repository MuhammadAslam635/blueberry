<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'total' => $this->faker->randomFloat(2, 1, 1000),
            'subtotal' => $this->faker->randomFloat(2, 1, 1000),
            'tax' => $this->faker->randomFloat(2, 1, 100),
            'discount' => $this->faker->randomFloat(2, 1, 100),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'status' => $this->faker->randomElement(["pending","process","dispatch","delivered","cancel"]),
            'cancel_date' => $this->faker->date(),
        ];
    }
}
