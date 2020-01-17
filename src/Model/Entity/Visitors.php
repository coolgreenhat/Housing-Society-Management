<?php
// src/Model/Entity/Visitor.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Visitors extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}
?>
