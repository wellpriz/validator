<?php
namespace App\model\Table;
use Cake\Database\Schema\Table;

class AlunosTable extends Table{

    /**
     * @param array $config
     */
    public function initialize(array $config ){

        $this->addBehaviuor('Timestamp');
        $this->displayField('nome');
    }

}

?>