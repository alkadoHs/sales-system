<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class UserTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $forge = \Config\Database::forge();


        $forge->addField('id');
        $forge->addField([
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true,
            ],
            'branch_id' => [
                'type' => 'INT',
                'constraint' => 4,
                'null' => true,
            ],
            'store_id' => [
                'type' => 'INT',
                'constraint' => 4,
                'null' => true,
            ],
            'is_superuser' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0,
            ],
            'is_staff' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0,
            ],
            'is_active' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $forge->addForeignKey('branch_id', 'branch', 'id', '', 'SET_NULL');
        $forge->addForeignKey('store_id', 'store', 'id', '', 'SET_NULL');
        $forge->createTable('user');
    }

    public function down()
    {
        $forge = \Config\Database::forge();
        $forge->dropTable('user');
    }
}
