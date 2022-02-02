<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $table = "rekomendasi";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'idKinerja',
                            'keterangan'
                            ];
    
    public function kinerja()
    {
        return $this->hasMany(Kinerja::class);
    }
}
