<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class surat_rekomendasi extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'kop'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'no'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'nama1'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'jabatan'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'nip'      => [
                'type'           => 'int',
                'constraint'     => 50,
            ],
            'e-mail'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'telp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'nama2'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'nim'      => [
                'type'           => 'int',
                'constraint'     => 50,
            ],
            'jurusan'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'fakultas'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'semester'      => [
                'type'           => 'int',
                'constraint'     => 50,
            ],
            'ipk'      => [
                'type'           => 'int',
                'constraint'     => 50,
            ],
            'sks'      => [
                'type'           => 'int',
                'constraint'     => 50,
            ],
            'isi'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 200,
            ],
            'tanggal'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'nama pengirim'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['published', 'draft'],
                'default'        => 'draft',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel surat rekomendasi
        $this->forge->createTable('surat_rekomendasi', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel surat rekomendasi
        $this->forge->dropTable('surat_rekomendasi');
    }
}
