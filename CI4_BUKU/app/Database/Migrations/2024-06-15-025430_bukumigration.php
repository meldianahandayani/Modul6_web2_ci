<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class bukumigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'penulis'     => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'penerbit'    => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_terbit' => [
                'type'       => 'YEAR',
            ],
            'created_at'  => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at'  => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bukumigration');
    }
    public function down()
    {
        $this->forge->dropTable('bukumigration');
    }
}