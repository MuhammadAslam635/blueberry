<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    public function definition()
    {
        return [
            'product_id' => Product::inRandomOrder()->first()->id,
            'order_id' => Order::inRandomOrder()->first()->id,
            'qty' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'review' => $this->faker->randomElement(["1","0"]),
        ];
    }
}
