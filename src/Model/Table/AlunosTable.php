<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class AlunosTable extends Table{

    /**
     * @param array $config
     */
    public function initialize(array $config ){

        $this->addBehavior('Timestamp');
        $this->displayField('nome');
    }

}

?>