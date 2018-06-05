<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bicicletas Model
 *
 * @method \App\Model\Entity\Bicicleta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bicicleta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bicicleta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bicicleta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bicicleta|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bicicleta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bicicleta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bicicleta findOrCreate($search, callable $callback = null, $options = [])
 */
class BicicletasTable extends Table
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

        $this->setTable('bicicletas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');


        $this->addBehavior('Proffer.Proffer', [
        	'foto' => [
        		'root' => WWW_ROOT . 'img/',
        		'dir' => 'foto_dir',
        		'thumbnailSizes' => [
        			'square' => [
        				'w' => 200,
        				'h' => 200,
        				'jpeg_quality'	=> 100
        			],
        			'landscape' => [
        				'w' => 300,
        				'h' => 200,
                'fit' => true,
                'jpeg_quality'	=> 100
        			],
        		],
        		'thumbnailMethod' => 'gd'
        	]
        ]);

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
            ->scalar('modelo')
            ->maxLength('modelo', 60)
            ->requirePresence('modelo', 'create')
            ->notEmpty('modelo');

        $validator
            ->scalar('marca')
            ->maxLength('marca', 60)
            ->requirePresence('marca', 'create')
            ->notEmpty('marca');

        $validator
            ->scalar('usuario')
            ->requirePresence('usuario', 'create')
            ->notEmpty('usuario');

        $validator
            ->scalar('rodado')
            ->requirePresence('rodado', 'create')
            ->notEmpty('rodado');

        $validator
            ->scalar('material')
            ->requirePresence('material', 'create')
            ->notEmpty('material');

        $validator
            ->scalar('velocidades')
            ->requirePresence('velocidades', 'create')
            ->notEmpty('velocidades');

        $validator
            ->scalar('color')
            ->requirePresence('color', 'create')
            ->notEmpty('color');

        $validator
            ->numeric('peso')
            ->allowEmpty('peso');

        $validator
            //->scalar('foto')
            ->maxLength('foto', 200)
            ->allowEmpty('foto');

        return $validator;
    }
}
