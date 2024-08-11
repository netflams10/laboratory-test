<?php

namespace Database\Seeders;

use App\Models\Mri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MRScanSeed extends Seeder
{
    private $mris = [
        'Cardiac MRI',
        'Closed MRI',
        'Fmri Games',
        'Functional MRI'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->mris as $name) {
            Mri::create(['name' => $name]);
        }
    }
}
