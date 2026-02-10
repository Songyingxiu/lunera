<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Episodes extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_episode'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        'id_content'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
        'episode_no'    => ['type' => 'INT', 'constraint' => 5], // Episode 1, 2, dst
        'title'         => ['type' => 'VARCHAR', 'constraint' => 255],
        'video_url'     => ['type' => 'VARCHAR', 'constraint' => 255],
        'duration'      => ['type' => 'INT', 'null' => true], // Durasi dalam menit
        'created_at'    => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id_episode', true);
    $this->forge->addForeignKey('id_content', 'contents', 'id_content', 'CASCADE', 'CASCADE');
    $this->forge->createTable('episodes');
    }

    public function down()
    {
        $this->forge->dropTable('episodes');
    }
}
