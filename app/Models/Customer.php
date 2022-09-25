<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * relation
     */
    public function logs(){
        return $this->hasMany(Log::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
