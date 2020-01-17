<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Housing Society Management';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-4 medium-4 columns">
            <h2><b><?= $this->Html->link('Housing Society Management', ['action' => '../Pages/']) ?></b></h2>
        </ul>
        <div class="top-bar-section collapse navbar-collapse">
            <ul class="right nav navbar-nav">
                <!-- <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li> -->
                <!-- <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li> -->
                <li class="nav-link"><b><?= $this->Html->link('Home', ['action' => '../Pages/']) ?></b></li>
                <li class="nav-link"><b><?= $this->Html->link('Residents', ['action' => '../Residents/']) ?></b></li>
                <li class="nav-link"><b><?= $this->Html->link('Visitor Log', ['action' => '../visitor/']) ?></b></li>
                <li class="nav-link"><b><?= $this->Html->link('Events', ['action' => '../events/']) ?></b></li>
                <li class="nav-link"><b><?= $this->Html->link('Complaints', ['action' => '../complaints/']) ?></b></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
