<?php
// src/Model/Entity/Events.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Events extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}
?>
