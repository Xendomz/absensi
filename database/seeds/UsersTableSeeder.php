<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
                    'role_id' => 1,
                    'username' => 'user'. $no,
                    'email' => 'user_'.$no.'@argon.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('secret'),
                    'created_at' => now(),
                    'updated_at' => now()
            ];
        }

        $data[] = [
                'name' => 'Admin Admin',
                'role_id' => 1,
                'username' => 'admin',
                'email' => 'admin@argon.com',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
        ];

        DB::table('users')->insert($data);
    }
}
