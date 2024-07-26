<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kepala_manajer = new User;
        $kepala_manajer->nama = "Kepala Manajer";
        $kepala_manajer->username = "kepalamanajer";
        $kepala_manajer->password = "123456";
        $kepala_manajer->role = "Kepala Manajer";
        $kepala_manajer->save();

        $hrd = new User;
        $hrd->nama = "HRD";
        $hrd->username = "hrd";
        $hrd->password = "123456";
        $hrd->role = "HRD";
        $hrd->save();
    }
}
