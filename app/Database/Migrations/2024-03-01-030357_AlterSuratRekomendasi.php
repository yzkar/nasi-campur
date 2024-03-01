<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Altersurat_rekomendasi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('surat_rekomendasi', [
            'slug VARCHAR(100) UNIQUE'
        ]);
    }

    //--------------------------------------------------------

    public function down()
    {
        $this->forge->dropColumn('surat_rekomendasi', 'slug');
    }
}