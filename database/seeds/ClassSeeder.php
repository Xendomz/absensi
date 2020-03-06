<?php

use Illuminate\Database\Seeder;
use App\ClassUser;

class ClassSeeder extends Seeder
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
        ];

        ClassUser::insert($data);
    }
}
