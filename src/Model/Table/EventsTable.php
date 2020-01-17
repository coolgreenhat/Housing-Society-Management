<?php
// src/Model/Table/ResidentsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class EventsTable extends Table
{

    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->e_name);

            $entity->slug = substr($sluggedTitle, 0, 200);
        }
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('e_name', false)
            ->minLength('e_name', 2)
            ->maxLength('e_name', 255)
            ->allowEmptyString('e_location', false)
            ->maxLength('e_location', 255);
        return $validator;
    }
}
?>
