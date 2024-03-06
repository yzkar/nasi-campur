<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Altersurkom extends Migration
{
    public function up()
    {
        $this->forge->addColumn('surkom', [
            'slug VARCHAR(100) UNIQUE'
        ]);
    }

    //--------------------------------------------------------

    public function down()
    {
        $this->forge->dropColumn('surkom', 'slug');
    }
}
