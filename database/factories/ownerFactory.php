<?php

namespace Database\Factories;
use App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\owner>
 */
class ownerFactory extends Factory
{
    protected $model=Owner::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
                'Name'=>fake()->name,
                'Surname'=>fake()->lastName(),
                'Phone_Number'=>fake()->randomNumber(9,true),
                'Age'=>fake()->randomNumber(2,true)
            ];
     
       
    }
}
