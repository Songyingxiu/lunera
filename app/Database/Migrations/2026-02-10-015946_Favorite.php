<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Favorite extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_favorite' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        'id_profile'  => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
        'id_content'  => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
        'added_at'    => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id_favorite', true);
    $this->forge->addForeignKey('id_profile', 'profiles', 'id_profile', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('id_content', 'contents', 'id_content', 'CASCADE', 'CASCADE');
    $this->forge->createTable('favorites');
    }

    public function down()
    {
        $this->forge->dropTable('favorites');
    }
}
