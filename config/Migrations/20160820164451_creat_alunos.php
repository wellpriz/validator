<?php

use Phinx\Migration\AbstractMigration;

class CreatAlunos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
   
    public function up(){
        // criar  table do Alunos
        $table = $this->table("alunos");
        $table->addColumn('nome', 'string')
                ->addColumn('cpf', 'string')
                ->addColumn('rg', 'string')
                ->addColumn('datanasc', 'date')
                ->addColumn('curso', 'string')
                ->addColumn('matricula', 'string')
                ->addColumn('semestre', 'integer')
                ->addColumn('unidade', 'string')
                ->addColumn('url', 'string')
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime') 
                ->save();

    }
    public function down(){
        //excluir  exlcuir tabela do  Alunos
        if($this->hastable("alunos")){
            $this->dropTable("alunos");
        }

    }
}
