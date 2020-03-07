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
            ['name' => "RPL"],
            ['name' => "BDP"],
            ['name' => "MM"],
            ['name' => "TKJ"],
        ];

        Jurusan::insert($data);
    }
}
