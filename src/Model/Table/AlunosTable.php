<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alunos Model
 *
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, callable $callback = null)
 */
class AlunosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('alunos');
        $this->displayField('nome');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf');

        $validator
            ->requirePresence('rg', 'create')
            ->notEmpty('rg');

        $validator
            ->date('datanasc')
            ->requirePresence('datanasc', 'create')
            ->notEmpty('datanasc');

        $validator
            ->requirePresence('curso', 'create')
            ->notEmpty('curso');

        $validator
            ->requirePresence('matricula', 'create')
            ->notEmpty('matricula');

        $validator
            ->integer('semestre')
            ->requirePresence('semestre', 'create')
            ->notEmpty('semestre');

        $validator
            ->requirePresence('unidade', 'create')
            ->notEmpty('unidade');

        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        return $validator;
    }
}
