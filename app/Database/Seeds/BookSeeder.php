<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
{
    $data = [
        [
            'title'     => 'Laskar Pelangi',
            'author'    => 'Andrea Hirata',
            'publisher' => 'Bentang Pustaka',
            'year'      => 2005,
        ],
        [
            'title'     => 'Bumi Manusia',
            'author'    => 'Pramoedya Ananta Toer',
            'publisher' => 'Hasta Mitra',
            'year'      => 1980,
        ],
        [
            'title'     => 'Cantik Itu Luka',
            'author'    => 'Eka Kurniawan',
            'publisher' => 'Gramedia',
            'year'      => 2002,
        ],
    ];
    $this->db->table('books')->insertBatch($data);
}
}
