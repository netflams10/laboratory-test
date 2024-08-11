<?php

namespace Database\Seeders;

use App\Models\Xray;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XraySeed extends Seeder
{
    private $xrays = [
        'chest', 'cervitical', 'thoracic vertebrae', 'lumvar vertebrae', 'lumbo sacral vertebrae',
        'thoraco lumbar vertebrae', 'wrist joint', 'thoracic inlet', 'shoulder joint', 'elbow joint', 'knee joint'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->xrays as $name) {
            Xray::create(['name' => $name]);
        }
    }
}
