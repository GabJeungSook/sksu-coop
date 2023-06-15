<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Masterlist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImagePathAttribute($value){
        return Storage::url($value);
    }
}
