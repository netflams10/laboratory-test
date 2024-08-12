<?php

namespace Database\Factories;

use App\Models\Xray;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaboratoryXray>
 */
class LaboratoryXrayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'xray_id' => Xray::all()->random()->id,
        ];
    }
}
