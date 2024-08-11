<?php

namespace Database\Seeders;

use App\Models\UltrasoundScan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UltraSoundScanSeed extends Seeder
{
    private $ultras = [
        'obstetric', 'abdominal', 'pelvis', 'prostrate', 'breast', 'thyroid'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->ultras as $name) {
            UltrasoundScan::create(['name' => $name]);
        }
    }
}   
