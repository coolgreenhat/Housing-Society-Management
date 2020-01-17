<?php
// src/Model/Table/ResidentsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Utility\Text;

use Cake\Validation\Validator;

class VisitorTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->visitor_name);
            $entity->slug = substr($sluggedTitle, 0, 100);
        }
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('visitor_name', false)
            ->minLength('visitor_name', 2)
            ->maxLength('visitor_name', 255)
            ->allowEmptyString('visiting_purpose', false)
            ->minLength('visiting_purpose', 2)
            ->maxLength('visiting_purpose', 255);
        return $validator;
    }
}
 ?>
