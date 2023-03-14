<?php

namespace Database\Factories;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\car>
 */
class carFactory extends Factory
{
    protected $model=Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'Brand'=>fake()->word(),
                'Model'=>fake()->randomNumber(4,true),
                'Registration_Number'=>fake()->name,
                'Owners_id'=>Owner::factory(),
        ];
    }
}
