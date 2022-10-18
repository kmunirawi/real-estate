<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'area' => rand(15, 80),
            'rooms' => rand(0, 5),
            'price' => rand(15, 800),
            'status' => rand(1, 2),
            'kind' => rand(1, 2),
            'user_id' => $this->faker->randomElement(User::all())->id,
            'city_id' => $this->faker->randomElement(City::all())->id,
            'type_id' => $this->faker->randomElement(Type::all())->id,

        ];
    }
}
