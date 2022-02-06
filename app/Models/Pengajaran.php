<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajaran extends Model
{
    protected $table = "pengajaran";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'dosen_id',
                            'kegiatan_id',
                            'masaPenugasan_id',
                            'rekomendasi_id',
                            'buktiPenugasan',
                            'sksBK',
                            'buktiDokumen',
                            'sksBD'
                            ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }

    public function masaPenugasan()
    {
        return $this->belongsTo(Masapenugasan::class, 'masaPenugasan_id', 'id');
    }

    public function rekomendasi()
    {
        return $this->belongsTo(Rekomendasi::class, 'rekomendasi_id', 'id');
    }
}
