<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = "semester";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'keterangan'
                            ];
    
    public function periode()
    {
        return $this->hasMany(Periode::class);
    }
}
