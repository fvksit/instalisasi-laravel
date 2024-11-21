<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Eloquent Relationships: Many To Many
class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function cars()
    {
        return $this->belongsToMany(Cars::class, 'cars_features', 'cars_id', 'features_id');
    }
}
