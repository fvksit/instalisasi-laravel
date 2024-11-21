<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;

    // Task Eloquent Relationships: One To One
    protected $table = 'manufactures';

    protected $fillable = [
        'nama',
        'alamat',
    ];

    public function cars()
    {
        return $this->hasOne(Cars::class);
    }
}
