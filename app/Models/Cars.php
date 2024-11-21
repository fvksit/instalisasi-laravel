<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan', 'manufactures_id'];

    public function setTanggalPembuatanAttribute($value)
    {
        $this->attributes['tanggal_pembuatan'] = $value . '-01';
    }

    public function getTanggalPembuatanAttribute($value)
    {
        return $value ? date('Y', strtotime($value)) : null;
    }

    // Task Eloquent Relationships: One To One
    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manufactures_id');
    }

    // Eloquent Relationships: One To Many
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    // Eloquent Relationships: Many To Many
    public function features()
    {
        return $this->belongsToMany(Feature::class, 'cars_features', 'cars_id', 'features_id');
    }
}