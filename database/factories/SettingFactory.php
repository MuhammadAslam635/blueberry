<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Setting;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'logo' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'whatsapp' => $this->faker->word(),
            'fb' => $this->faker->word(),
            'insta' => $this->faker->word(),
            'address' => $this->faker->text(),
            'map' => $this->faker->text(),
            'country' => $this->faker->country(),
        ];
    }
}
