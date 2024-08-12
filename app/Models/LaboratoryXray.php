<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryXray extends Model
{
    use HasFactory;

    protected $fillable = ['laboratory_id', 'xray_id'];

    protected $hidden = ['created_at', 'updated_at', 'laboratory_id', 'xray_id'];

    protected $with = ['xray'];

    public function xray ()
    {
        return $this->hasOne(Xray::class, 'id', 'xray_id');
    }
}
