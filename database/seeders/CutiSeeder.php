<?php

namespace Database\Seeders;

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data cuti
        $cutiData = [
            [
                'nomer_induk' => 'IP06001',
                'tanggal_cuti' => '2020-08-02',
                'lama_cuti' => 2,
                'keterangan' => 'Acara Keluarga',
            ],
            [
                'nomer_induk' => 'IP06001',
                'tanggal_cuti' => '2020-08-18',
                'lama_cuti' => 2,
                'keterangan' => 'Anak Sakit',
            ],
            [
                'nomer_induk' => 'IP06006',
                'tanggal_cuti' => '2020-08-19',
                'lama_cuti' => 1,
                'keterangan' => 'Nenek Sakit',
            ],
            [
                'nomer_induk' => 'IP06007',
                'tanggal_cuti' => '2020-08-23',
                'lama_cuti' => 1,
                'keterangan' => 'Sakit',
            ],
            [
                'nomer_induk' => 'IP06004',
                'tanggal_cuti' => '2020-08-29',
                'lama_cuti' => 5,
                'keterangan' => 'Menikah',
            ],
            [
                'nomer_induk' => 'IP06003',
                'tanggal_cuti' => '2020-08-30',
                'lama_cuti' => 2,
                'keterangan' => 'Acara Keluarga',
            ],
        ];

        foreach ($cutiData as $data) {
            # code...
            Cuti::create($data);
        }
    }
}
