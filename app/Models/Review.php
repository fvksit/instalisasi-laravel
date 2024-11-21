<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Eloquent Relationships: One To Many
class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'nilai',
        'nama',
        'isi'
    ];

    public function car()
    {
        return $this->belongsTo(Cars::class);
    }
}