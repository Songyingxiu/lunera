<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_category'   => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        'category_name' => ['type' => 'VARCHAR', 'constraint' => 100], 
        'slug'          => ['type' => 'VARCHAR', 'constraint' => 100],
    ]);
    $this->forge->addKey('id_category', true);
    $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('categories');
        $this->db->enableForeignKeyChecks();
    }
}
