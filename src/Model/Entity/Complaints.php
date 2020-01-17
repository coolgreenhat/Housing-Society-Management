<?php
// src/Model/Entity/Home.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Complaints extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}
?>
