<?php

namespace App\Database\Seeds;

use App\Models\Pengguna_12200845;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200845 extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'      => 'owner',
                'password'  => md5('12345')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => 'marketing',
                'password'  => md5('34567')
            ]
        ];

        $p = new Pengguna_12200845();
        $p->insertBatch($data);
    }
}