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
                            'tahunAjaran',
                            'semester'
                            ];
    public function pengajaran()
    {
        return $this->hasMany(Pengajaran::class);
    }
}
