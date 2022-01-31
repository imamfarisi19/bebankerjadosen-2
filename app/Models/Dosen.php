<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosens";
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
                            'jabatanFungsional',
                            'golongan',
                            ];
}
