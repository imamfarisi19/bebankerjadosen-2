<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebankerja extends Model
{
    protected $table = "bebankerja";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'buktiPenugasan',
                            'sks'
                            ];
    
    public function pengajaran()
    {
        return $this->hasMany(Pengajaran::class);
    }
}
