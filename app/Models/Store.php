<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    /**
     * relation
     */
    public function users(){
        return $this->hasMany(User::class);
    }

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
