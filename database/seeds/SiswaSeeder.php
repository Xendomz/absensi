<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array();
        $dataname = [
            'Adam Maulana',
            'Adhi Nugraha S.',
            'Akhmad Farizqi R.',
            'Ali Imron Ahmadi',
            'Aqil Rasyid',
            'Bagoes Satria Wijaya',
            'Eliazer Rizky Triaputra',
            'Gilang Hendrawan Prawira',
            'Hardiansah',
            'Lintang Cahyaningtyas',
            'Muh. Krisna R.A',
            'Muh. Ziyad Awfa',
            'Muh. Fahreza Hamzah P.',
            'Nabila Putri Normalita',
            'Najibullah Muhariri',
            'Risma Wati Putri',
            'Satria Irsandinata Putra',
            'Enrico Giuliano',
            'Hesty Ayu Wydia Z.',
            'Jihan Kamil',
            'Novalitza Rahmadani E.P.',
            'Tammy Oktavia',
            'Virzinio Dutha',
        ];

        foreach ($dataname as $key => $value) {
            $no = $key + 1;
            $data[] = [
                    'name' => $value,
                    'class_id' => rand(1,3),
                    'jurusan_id' => rand(1,4),
                    'created_at' => now(),
                    'updated_at' => now()
            ];
        }

        Siswa::insert($data);
    }
}
