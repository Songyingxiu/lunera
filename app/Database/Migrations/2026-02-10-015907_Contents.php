<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Content extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id_content'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
        'id_category'   => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
        'title'         => ['type' => 'VARCHAR', 'constraint' => 255],
        'slug'          => ['type' => 'VARCHAR', 'constraint' => 255], // Untuk URL ramah SEO
        'description'   => ['type' => 'TEXT', 'null' => true],
        'thumbnail_url' => ['type' => 'VARCHAR', 'constraint' => 255],
        'cover_url'     => ['type' => 'VARCHAR', 'constraint' => 255], // Gambar header besar
        'video_url'     => ['type' => 'VARCHAR', 'constraint' => 255], // Link Video (Movie) atau Trailer (Series)
        'release_year'  => ['type' => 'YEAR', 'null' => true],
        'studio'        => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true], // Contoh: MAPPA
        'type'          => ['type' => 'ENUM', 'constraint' => ['movie', 'series'], 'default' => 'movie'],
        'status'        => ['type' => 'ENUM', 'constraint' => ['ongoing', 'completed'], 'default' => 'completed'],
        'rating'        => ['type' => 'FLOAT', 'null' => true], // Rating (misal: 8.5)
        'created_at'    => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id_content', true);
    $this->forge->addForeignKey('id_category', 'categories', 'id_category', 'CASCADE', 'CASCADE');
    $this->forge->createTable('contents');
    }

    public function down()
    {
        $this->forge->dropTable('contents');
    }
}
