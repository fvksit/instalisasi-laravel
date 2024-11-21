<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;
    
    protected $table = 'manufactures';

    protected $fillable = [
        'cars_id',
        'nama',
        'alamat',
    ];

    public function cars()
    {
        return $this->belongsTo(Cars::class, 'cars_id');
    } 
}