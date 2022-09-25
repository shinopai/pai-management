<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    /**
     * relation
     */
    public function users(){
        return $this->hasMany(User::class);
    }
}
