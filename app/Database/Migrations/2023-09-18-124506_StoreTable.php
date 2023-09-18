<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class StoreTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $forge = \Config\Database::forge();

        $forge->addField('id');
        $forge->addField([
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'mnj_id' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);

        $forge->addForeignKey('mnj_id', 'user', 'id', '', 'SET_NULL', 'store_mnj_id');
        $forge->createTable('store');
    }

    public function down()
    {
        $forge = \Config\Database::forge();
        $forge->dropTable('store');
    }
}
