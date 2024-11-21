<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan', 'manufactures_id'];
    
    public function setTanggalPembuatanAttribute($value){
        $this->attributes['tanggal_pembuatan'] = $value . '-01';
    }

    public function getTanggalPembuatanAttribute(){
        return $this->tanggal_pembuatan ? date('Y', strtotime($this->tanggal_pembuatan)) : null;
    }

    // Task Eloquent Relationships: One To One
    public function manufactures()
    {
        return $this->belongsTo(Manufacture::class);
    }
}