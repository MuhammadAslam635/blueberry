<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'vendor_id' => null,
            'sub_category_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'sale_price' => $this->faker->randomFloat(2, 0, 999999.99),
            'qty' => $this->faker->numberBetween(-10000, 10000),
            'sale_qty' => $this->faker->numberBetween(-10000, 10000),
            'sku' => $this->faker->word(),
            'stock' => $this->faker->randomElement(['in', 'out']),
            'closure' => $this->faker->word(),
            'sole' => $this->faker->word(),
            'detail' => $this->faker->text(),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'gallery' => '{}',
        ];
    }
}
