<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'namaDepan',
                            'namaBelakang', 
                            'email', 
                            'jabatan',
                            'tanggalLahir',
                            'NIDN',
                            'NIP',
                            'gelarDepan',   
                            'gelarBelakang',
                            'jabatanFungsional_id',
                            'golongan',
                            'gambar'
                            ];

    public function jabfung()
    {
        return $this->belongsTo(Jabatanfungsional::class, 'jabatanFungsional_id', 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function kegiatan()
    {
        return $this->belongsToMany(Kegiatan::class);
    }

    public function pengajaran()
    {
        return $this->hasMany(Kegiatan::class);
    }
}
