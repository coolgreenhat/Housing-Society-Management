<?php
// src/Model/Entity/Home.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Residents extends Entity
{
    protected $_accessible = [
        '*' => true,
        'res_id' => false,
        'slug' => false,
    ];
}
?>
