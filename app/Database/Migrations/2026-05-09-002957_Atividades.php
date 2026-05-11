<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Atividades extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'LoginId' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],

            'AtividadeId' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'        => TRUE,
                'auto_increment' => TRUE
            ],

            'Nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

            'Descricao' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],

            'DataInicio' => [
                'type' => 'DATETIME',
                'null' => true, // Permite que o campo fique vazio (opcional)
            ],

            'DataFim' => [
                'type' => 'DATETIME',
                'null' => true, // Muito útil se a atividade ainda não tiver terminado
            ],

            'Status' => [
                'type'       => 'ENUM',
                'constraint' => ['pendente', 'concluido', 'cancelado'],
                'default'    => 'pendente',
            ],
        ]);
        
        $this->forge->addForeignKey('LoginId', 'login', 'LoginId', 'CASCADE', 'CASCADE');
        $this->forge->addKey('AtividadeId', TRUE);
        $this->forge->createTable('atividades');
    }

    public function down()
    {
        $this->forge->dropTable('atividades');
    }
}
