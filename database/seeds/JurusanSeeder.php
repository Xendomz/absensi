<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => "Rekayasa Perangkat Lunak"],
            ['name' => "Teknik Komputer dan Jaringan"],
            ['name' => "Multimedia"],
            ['name' => "Bisnis Daring dan Pemasaran"],
        ];

        Jurusan::insert($data);
    }
}
