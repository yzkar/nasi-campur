<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alterletter extends Migration
{
    public function up()
    {
        $this->forge->addColumn('letter', [
            'slug VARCHAR(100) UNIQUE'
        ]);
    }

    //--------------------------------------------------------

    public function down()
    {
        $this->forge->dropColumn('letter', 'slug');
    }
}
