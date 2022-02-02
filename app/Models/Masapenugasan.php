<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masapenugasan extends Model
{
    protected $table = "masapenugasan";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'idBebanKerja',
                            'keterangan'
                            ];
    
    public function bebanKerja()
    {
        return $this->hasMany(Bebankerja::class);
    }
}
