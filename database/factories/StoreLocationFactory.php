<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoreLocation>
 */
class StoreLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cities = [

            'Karachi' => 'PK-KHI',

            'Islamabad' => 'PK-ISB',

            'Lahore' => 'PK-LHR',

            'Multan' => 'PK-MUL',

            'Peshawar' => 'PK-PES',

        ];

        $city = $this->faker->randomElement(array_keys($cities));

        return [

            'name' => $city,

            'slug' => Str::slug($city),

            'status' => 'active',

            'country_code' => 'PK',

            'city_code' => $cities[$city],

        ];
    }
}
