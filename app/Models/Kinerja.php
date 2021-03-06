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
                            'buktiDokumen', 
                            'sks'
                            ];

    public function pengajaran()
    {
        return $this->hasMany(Pengajaran::class);
    }
}
