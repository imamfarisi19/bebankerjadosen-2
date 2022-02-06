<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = "kegiatan";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'jenis'
                            ];

    public function pengajaran()
    {
        return $this->hasMany(Pengajaran::class);
    }


    // public function dosen()
    // {
    //     return $this->belongsToMany(dosenkegiatan::class,'dosen_id','id');
    // }

    // public function bebanKerja()
    // {
    //     return $this->belongsTo(Bebankerja::class,'bebanKerja_id','id');
    // }

    // public function masaPenugasan()
    // {
    //     return $this->belongsTo(Masapenugasan::class,'masaPenugasan_id','id');
    // }

    // public function kinerja()
    // {
    //     return $this->belongsTo(Kinerja::class,'kinerja_id','id');
    // }

    // public function rekomendasi()
    // {
    //     return $this->belongsTo(Rekomendasi::class,'rekomendasi_id','id');
    // }
}
