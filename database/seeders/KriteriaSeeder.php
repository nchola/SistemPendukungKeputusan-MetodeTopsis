<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriteria = new Kriteria;
        $kriteria->nama_kriteria = "Kehadiran";
        $kriteria->bobot = 25;
        $kriteria->save();

        $kriteria = new Kriteria;
        $kriteria->nama_kriteria = "Kinerja";
        $kriteria->bobot = 35;
        $kriteria->save();

        $kriteria = new Kriteria;
        $kriteria->nama_kriteria = "Cara Berpakaian";
        $kriteria->bobot = 15;
        $kriteria->save();
        
        $kriteria = new Kriteria;
        $kriteria->nama_kriteria = "Lama Bekerja";
        $kriteria->bobot = 15;
        $kriteria->save();
        
        $kriteria = new Kriteria;
        $kriteria->nama_kriteria = "Sikap Atau Perilaku";
        $kriteria->bobot = 10;
        $kriteria->save();
    }
}
