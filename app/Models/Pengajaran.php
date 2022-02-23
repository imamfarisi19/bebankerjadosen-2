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
                            'periode_id',
                            'kegiatan_id',
                            'masaPenugasan_id',
                            'rekomendasi_id',
                            'bebanKerja_id',
                            'kinerja_id'
                            ];

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id', 'id');
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }

    public function masaPenugasan()
    {
        return $this->belongsTo(Masapenugasan::class, 'masaPenugasan_id', 'id');
    }

    public function bebanKerja()
    {
        return $this->belongsTo(Bebankerja::class, 'bebanKerja_id', 'id');
    }

    public function kinerja()
    {
        return $this->belongsTo(Kinerja::class, 'kinerja_id', 'id');
    }

    public function rekomendasi()
    {
        return $this->belongsTo(Rekomendasi::class, 'rekomendasi_id', 'id');
    }
}
