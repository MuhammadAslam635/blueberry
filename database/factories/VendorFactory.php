<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Vendor;

class VendorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vendor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'business_name' => $this->faker->word(),
            'logo' => $this->faker->word(),
            'address' => $this->faker->word(),
            'fb' => $this->faker->word(),
            'insta' => $this->faker->word(),
            'whatsapp' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'link' => $this->faker->word(),
        ];
    }
}
