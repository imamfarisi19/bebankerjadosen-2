<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Namaasesor extends Model
{
    protected $table = "namaasesor";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'nama'
                            ];
    public function asesor()
    {
        return $this->hasMany(Asesor::class);
    }

}
