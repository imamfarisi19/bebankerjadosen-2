<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = "periode";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'dosen_id',
                            'tahunAjaran_id',
                            'semester_id'
                            ];

    public function tahunAjaran()
    {
        return $this->belongsTo(Tahunajaran::class, 'tahunAjaran_id', 'id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    }

    public function pengajaran()
    {
        return $this->hasMany(Pengajaran::class);
    }
    public function asesor()
    {
        return $this->hasMany(Asesor::class);
    }
    
}
