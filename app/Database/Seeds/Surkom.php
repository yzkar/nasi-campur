<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class surkom extends Seeder
{
    public function run()
    {
        // membuat data
        $surkom_data = [
            [
                'title' => 'Selamat datang di Codeigntier',
                'slug'  => 'codeigniter-intro',
                'no' => 'Selamat datang di Codeigntier',
                'nama1' => 'Selamat datang di Codeigntier',
                'jabatan' => 'Selamat datang di Codeigntier',
                'nip' => '3106',
                'e-mail' => 'Selamat datang di Codeigntier',
                'telp' => 'Selamat datang di Codeigntier',
                'nama2' => 'Selamat datang di Codeigntier',
                'nim' => '1306',
                'jurusan' => 'Selamat datang di Codeigntier',
                'fakultas' => 'Selamat datang di Codeigntier',
                'semester' => '1306',
                'ipk' => '1306',
                'sks' => '1306',
                'content' => 'Selamat datang di Codeigntier',
                'tanggal' => 'Selamat datang di Codeigntier',
                'nama pengirim' => 'Selamat datang di Codeigntier.'
            ]
        ]; 

        foreach ($surkom_data as $data) {
            // insert semua data ke tabel
            $this->db->table('surkom')->insert($data);
        }
    }
}
