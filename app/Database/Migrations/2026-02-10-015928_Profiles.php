<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profiles extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_profile'   => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        'id_user'      => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
        'profile_name' => ['type' => 'VARCHAR', 'constraint' => 50],
        'avatar'       => ['type' => 'VARCHAR', 'constraint' => 255],
    ]);
    $this->forge->addKey('id_profile', true);
    $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
    $this->forge->createTable('profiles');
    }

    public function down()
    {
        $this->forge->dropTable('profiles');
    }
}
