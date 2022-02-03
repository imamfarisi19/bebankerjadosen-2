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
                            'masaPenugasan_id',
                            'buktiPenugasan', 
                            'sks'
                            ];
    
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function masaPenugasan()
    {
        return $this->belongsTo(Masapenugasan::class,'masaPenugasan_id');
    }
}
