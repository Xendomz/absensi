<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Wali Kelas'
            ],
            [
                'name' => 'Murid'
            ]
        ];

        Role::insert($data);
    }
}
