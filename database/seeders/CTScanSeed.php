<?php

namespace Database\Seeders;

use App\Models\CTScan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CTScanSeed extends Seeder
{
    private $ct_scans = [
        'Sequential CT',
        'Spiral CT',
        'Electron beam tomography',
        'Dual Energy CT',
        'CT perfusion imaging'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->ct_scans as $name) {
            CTScan::create(['name' => $name]);
        }
    }
}
