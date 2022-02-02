<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatanfungsional extends Model
{
    protected $table = "jabatanfungsional";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id', 
                            'jenis'
                            ];
    
    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}
