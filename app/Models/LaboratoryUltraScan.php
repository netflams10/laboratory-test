<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryUltraScan extends Model
{
    use HasFactory;

    protected $fillable = ['ultrasound_scan_id', 'laboratory_id'];

    protected $hidden = ['created_at', 'updated_at', 'ultrasound_scan_id', 'laboratory_id'];

    protected $with = ['scan'];

    public function scan () 
    {
        return $this->hasOne(UltrasoundScan::class, 'id', 'ultrasound_scan_id');
    }
}
