<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'deskripsi' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'akun' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'jenis' => [
                'type'       => 'ENUM',
                'constraint' => ['masuk', 'keluar'],
                'default'    => 'masuk',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('kas');
    }

    public function down()
    {
        $this->forge->dropTable('kas');
    }
}
