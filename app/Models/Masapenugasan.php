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
                            'keterangan'
                            ];
    
    public function pengajaran()
    {
        return $this->hasMany(Pengajaran::class);
    }
}
