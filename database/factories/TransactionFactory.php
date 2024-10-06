<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     */
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'order_id' => Order::inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(["pending","paid","fail"]),
            'payment_mode' => $this->faker->randomElement(["cod","card","online","whatsapp"]),
        ];
    }
}
