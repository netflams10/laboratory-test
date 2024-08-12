<?php

namespace Database\Factories;

use App\Models\Laboratory;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'   => fake()->name(),
            'email'  => fake()->email(),
            'phone'  => fake()->phoneNumber(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Patient $patient) {
            Laboratory::factory(rand(1, 6))->create(['patient_id' => $patient->id]);
        });  
    }
}
