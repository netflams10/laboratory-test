<?php

namespace Database\Factories;

use App\Models\UltrasoundScan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaboratoryUltraScan>
 */
class LaboratoryUltraScanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ultrasound_scan_id' => UltrasoundScan::all()->random()->id,
        ];
    }
}
