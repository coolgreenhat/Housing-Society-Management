<?php
// src/Model/Table/ComplaintsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Utility\Text;

use Cake\Validation\Validator;

class ComplaintsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->complaint);
            $entity->slug = substr($sluggedTitle, 0, 100);
        }
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('complaint', false)
            ->minLength('complaint', 10)
            ->maxLength('complaint', 255)
            ->allowEmptyString('c_status', false)
            ->maxLength('c_status', 20);
        return $validator;
    }
}
?>
