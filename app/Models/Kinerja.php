<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    protected $table = "kinerja";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'rekomendasi_id',
                            'buktiDokumen', 
                            'sks'
                            ];

    public function masaPenugasan()
    {
        return $this->hasMany(Masapenugasan::class);
    }

    public function rekomendasi()
    {
        return $this->belongsTo(Rekomendasi::class,'rekomendasi_id','id');
    }
}
