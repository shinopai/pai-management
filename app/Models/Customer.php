<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'name',
            'post_code',
            'address',
            'birthday',
            'email',
            'phone',
            'store_id'
        ];

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
