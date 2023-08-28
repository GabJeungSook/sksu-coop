<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeDateOfPlantingParticipation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
}
