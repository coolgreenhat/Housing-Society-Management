<!-- <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head> -->


<ul class="nav text-center">
    <li class="nav-item">
        <h2 class="nav-link"><b><?= $this->Html->link('Home', ['action' => '../Pages/']) ?></b></h2>
    </li>
    <li class="nav-item">
        <h2 class="nav-link"><b><?= $this->Html->link('Residents', ['action' => '../Residents/']) ?></b></h2>
    </li>
    <li class="nav-item">
        <h2 class="nav-link"><b><?= $this->Html->link('Visitor Log', ['action' => '../visitor/']) ?></b></h2>
    </li>
    <li class="nav-item">
        <h2 class="nav-link"><b><?= $this->Html->link('Events', ['action' => '../events/']) ?></b></h2>
    </li>
    <li class="nav-item">
        <h2 class="nav-link"><b><?= $this->Html->link('Complaints', ['action' => '../complaints/']) ?></b></h2>
    </li>
</ul>
