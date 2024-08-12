<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $fillable = ['ct_scan_id', 'mri_id', 'patient_id'];

    protected $hidden = ['ct_scan_id', 'mri_id', 'patient_id'];

    public function crt_scan () 
    {
        return $this->hasOne(CTScan::class, 'id', 'ct_scan_id');
    }

    public function mri () 
    {
        return $this->hasOne(Mri::class, 'id', 'mri_id');
    }

    public function ultrasound_scan ()
    {
        return $this->hasMany(LaboratoryUltraScan::class, 'laboratory_id');
    }

    public function xrays ()
    {
        return $this->hasMany(LaboratoryXray::class, 'laboratory_id');
    }
}
