<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table{
    
    public function validationDefault(Validator $validator){

        $validator
        ->scalar('title')
        ->maxLength('title', 10, 'maxLength error')
        ->notEmpty('title', 'required error');

        $validator
        ->scalar('summary')
        ->maxLength('summary', 50, 'maxLength error')
        ->notEmpty('summary', 'required error');

        $validator
        ->scalar('content')
        ->maxLength('content', 50000, 'maxLength error')
        ->notEmpty('content', 'required error');

        return $validator;

    }

}