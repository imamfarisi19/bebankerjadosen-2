<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $table = "asesor";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'nama_id',
                            'periode_id'
                            ];

    public function nama()
    {
        return $this->belongsTo(Namaasesor::class, 'nama_id', 'id');
    }                  
    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id', 'id');
    }
}
