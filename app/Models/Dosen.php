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
                            'golongan'
                            ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    public function jabfung()
    {
        return $this->belongsTo(Jabatanfungsional::class, 'jabatanFungsional_id', 'id');
    }

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
