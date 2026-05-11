<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
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
        'title' => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => true,
        ],
        'author' => [
            'type'       => 'VARCHAR', 
            'constraint' => 75,
            'null'       => true,
        ],
        'publisher' => [
            'type'       => 'VARCHAR',
            'constraint' => 75,
            'null'       => true,
        ],
        'year' => [
            'type' => 'YEAR',
            'null' => true,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);
    
    $this->forge->addKey('id', true); 
    $this->forge->createTable('books');
}

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
