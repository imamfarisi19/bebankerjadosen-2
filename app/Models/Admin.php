<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = "id";
    protected $fillable = [
                            'id',
                            'namaDepan',
                            'namaBelakang', 
                            'email', 
                            'jabatan',
                            'tanggalLahir'
                            ];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
