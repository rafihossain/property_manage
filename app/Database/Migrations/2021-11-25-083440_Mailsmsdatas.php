<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mailsmsdatas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'dmailname'          => [
                'type'       => 'VARCHAR',
                'constraint'     => '50',
            ],
            'dmailemail'          => [
                'type'       => 'VARCHAR',
                'constraint'     => '40',
            ],
            'dmailphone'          => [
                'type'       => 'VARCHAR',
                'constraint'     => '20',
            ],
            'dmailsubject'          => [
                'type'       => 'VARCHAR',
                'constraint'     => '50',
            ],
            'dmailmessage'          => [
                'type'       => 'TEXT',
            ],
            'dmailstatus'          => [
                'type'       => 'INT',
                'constraint'     => '5',
            ],
            'dmailtype'          => [
                'type'       => 'VARCHAR',
                'constraint'     => '50',
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mailsmsdatas');
    }

    public function down()
    {
        $this->forge->dropTable('mailsmsdatas');
    }
}
