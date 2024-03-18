<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
                'unique'     => true
            ],
            'phone' => [
                'type'       => 'VARCHAR', 
                'constraint' => '20',
                'null'       => false,
            ],
            'postal_address' => [
                'type' => 'TEXT',
                'null'       => false,
            ],
            'professional_status' => [
                'type'       => 'BOOLEAN',
                'default' => false,
                'null'       => false,
            ],
            'last_login' => [
                'type' => 'DATETIME',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
