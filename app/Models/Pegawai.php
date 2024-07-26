<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    use HasFactory;
    protected $table = "pegawai";
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'id_pegawai');
    }
}
