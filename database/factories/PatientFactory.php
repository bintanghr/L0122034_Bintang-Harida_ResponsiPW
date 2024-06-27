<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    protected $model = Patient::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            // 'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'age' => fake()->randomNumber(1,2),
            'address' => fake()->address()
        ];
    }
}
