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
            ['name' => "X"],
            ['name' => "XI"],
            ['name' => "XII"],
        ];

        ClassUser::insert($data);
    }
}
