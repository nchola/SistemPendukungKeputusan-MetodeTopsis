<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            "Kehadiran" => [
                ['Selalu Hadir', 5],
                ['Absen 1x', 4],
                ['Absen >2x', 3],
                ['Absen 3-4x', 2],
                ['Absen >5x', 1],
            ],
            "Kinerja" => [
                ['Target > 7.500.000.000/Bulan', 5],
                ['Target < 7.500.000.000/Bulan', 4],
                ['Target < 5.000.000.000/Bulan', 3],
                ['Target < 3.500.000.000/Bulan', 2],
                ['Target < 1.000.000.000/Bulan', 1],
            ],
            "Cara Berpakaian" => [
                ['Setiap Hari', 5],
                ['4x Pakaian kantor/Minggu', 4],
                ['3x Pakaian kantor/Minggu', 3],
                ['2x Pakaian kantor/Minggu', 2],
                ['1x Pakaian kantor/Minggu', 1],
            ],
            "Lama Bekerja" => [
                ['>5 Tahun', 5],
                ['<4 Tahun', 4],
                ['2-3 Tahun', 3],
                ['1 Tahun', 2],
                ['<6 Bulan', 1],
            ],
            "Sikap Atau Perilaku" => [
                ['Sangat Baik', 5],
                ['Baik', 4],
                ['Cukup Baik', 3],
                ['Tidak Baik', 2],
                ['Sangat Tidak Baik', 1],
            ],
        ];
        foreach ($arr as $key => $value) {
            $kriteria1 = Kriteria::where('nama_kriteria', $key)->first();
            foreach ($value as $value2) {
                $sub_kriteria = new SubKriteria;
                $sub_kriteria->id_kriteria = $kriteria1->id;
                $sub_kriteria->nama_sub_kriteria = $value2[0];
                $sub_kriteria->nilai = $value2[1];
                $sub_kriteria->save();
            }
        }
    }
}
