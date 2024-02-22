<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class letter extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'alamat'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'no'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'perihal'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'lampiran'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'content' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'tanggal'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'pengirim'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'nip'      => [
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

        // Membuat tabel letter
        $this->forge->createTable('letter', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel letter
        $this->forge->dropTable('letter');
    }
}
