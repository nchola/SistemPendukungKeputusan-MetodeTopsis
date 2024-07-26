<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawai = new Pegawai;
        $pegawai->nama = "Pegawai 1";
        $pegawai->username = "pegawai1";
        $pegawai->password = "123456";
        $pegawai->nama = "Pegawai 1";
        $pegawai->tanggal_lahir = "1996-07-23";
        $pegawai->jenis_kelamin = "Laki-Laki";
        $pegawai->alamat = "Jl Rajawali";
        $pegawai->save();

        $pegawai = new Pegawai;
        $pegawai->nama = "Pegawai 2";
        $pegawai->username = "pegawai2";
        $pegawai->password = "123456";
        $pegawai->tanggal_lahir = "1998-01-13";
        $pegawai->jenis_kelamin = "Perempuan";
        $pegawai->alamat = "Jl Rajawali";
        $pegawai->save();
    }
}
