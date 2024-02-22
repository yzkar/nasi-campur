<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class letter extends Seeder
{
    public function run()
    {
        // membuat data
        $letter_data = [
            [
                'title' => 'Selamat datang di Codeigntier',
                'slug'  => 'codeigniter-intro',
                'alamat' => 'Selamat datang di Codeigntier',
                'no' => 'Selamat datang di Codeigntier',
                'perihal' => 'Selamat datang di Codeigntier',
                'lampiran' => 'Selamat datang di Codeigntier',
                'content' => 'Pengenalan Codeigniter untuk Pemula',
                'tanggal' => 'Selamat datang di Codeigntier',
                'pengirim' => 'Selamat datang di Codeigntier',
                'nip' => 'Selamat datang di Codeigntier.'
            ]

        ];

        foreach ($letter_data as $data) {
            // insert semua data ke tabel
            $this->db->table('letter')->insert($data);
        }
    }
}
