<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class surkom extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel surkom
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
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
                'type'           => 'INT',
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
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'ipk'      => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'sks'      => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'content'      => [
                'type'           => 'TEXT',
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

        // Membuat tabel surkom
        $this->forge->createTable('surkom', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel surkom
        $this->forge->dropTable('surkom');
    }
}