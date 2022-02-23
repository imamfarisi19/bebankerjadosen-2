<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahunajaran extends Model
{
    protected $table = "tahunajaran";
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
