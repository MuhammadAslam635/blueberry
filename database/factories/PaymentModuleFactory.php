<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PaymentModule;

class PaymentModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaymentModule::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(["cod","strip","jazzcash","easypaisa","whatsapp"]),
            'status' => $this->faker->randomElement(["active","inactive"]),
            'mode' => $this->faker->randomElement(["test","live"]),
            'module_key' => $this->faker->word(),
            'module_secret' => $this->faker->word(),
            'merchent_id' => $this->faker->word(),
            'module_password' => $this->faker->word(),
        ];
    }
}
