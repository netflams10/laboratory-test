<?php

namespace Database\Factories;

use App\Models\CTScan;
use App\Models\Laboratory;
use App\Models\LaboratoryUltraScan;
use App\Models\LaboratoryXray;
use App\Models\Mri;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laboratory>
 */
class LaboratoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ct_scan_id' => CTScan::all()->random()->id,
            'mri_id'     => Mri::all()->random()->id,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Laboratory $laboratory) {
            LaboratoryXray::factory(rand(1, 7))->create(['laboratory_id' => $laboratory->id]);
            LaboratoryUltraScan::factory(rand(1, 7))->create(['laboratory_id' => $laboratory->id]);
        });
    }
}
