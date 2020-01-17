<!-- File: src/Template/Events/index.ctp -->
<h2><center>Events</center></h2>
<table>
    <tr>
        <th><center>Event Name</center></th>
        <th><center>Event Date & Time</center></th>
        <th><center>Event Location</center></th>
        <th><center>Options</center></th>
    </tr>

    <?php foreach ($events as $event): ?>
    <tr>
        <td>
            <center><?= $event->e_name ?></center>
        </td>
        <td>
            <center><?= $event->e_date->format(DATE_RFC850)?></center>
        </td>
        <td>
            <center><?= $event->e_location ?></center>
        </td>
        <td>
            <center><?= $this->Html->link('Edit', ['action' => 'edit', $event->slug]) ?></center>
            <center><?= $this->Form->postlink('Delete', ['action' => 'delete', $event->slug],['confirm' => 'Are You Sure?'])?></center>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<center><b><?= $this->Html->link('Add Event', ['action' => 'add']) ?></b></center>
