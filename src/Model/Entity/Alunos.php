<?php
namespace App\model\Entity;
use Cake\ORM\Entity;

class Alunos extends Entity {
    protected  $_accessible =[
    			'nome' => true,
                'cpf' => true,
                'rg' => true,
                'datanasc' => true,
                'curso' => true,
                'matricula' => true,
                'semestre' => true,
                'unidade' => true,
                'url' => true,
                ];
              
}

?>