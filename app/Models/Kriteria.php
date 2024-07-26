<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = "kriteria";
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'id_kriteria');
    }

    function sub_kriteria()
    {
        return $this->hasMany(SubKriteria::class, 'id_kriteria');
    }
}
