<?php
// src/Model/Table/ResidentsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Utility\Text;

use Cake\Validation\Validator;

class ResidentsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->res_name);
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('res_name', false)
            ->minLength('res_name', 2)
            ->maxLength('res_name', 255)
            ->allowEmptyString('res_email', false)
            ->minLength('res_email', 2)
            ->maxLength('res_email', 255)
            ->allowEmptyString('res_phone', false)
            ->minLength('res_phone', 10)
            ->maxLength('res_phone', 10);
        return $validator;
    }
}
?>
