<!-- File: src/Template/Visitor/index.ctp -->
<h2><center>Visitors</center></h2>
<table>
    <tr>
        <th><center>Name</center></th>
        <th><center>Phone</center></th>
        <th><center>Purpose</center></th>
        <th><center>In Time</center></th>
        <th><center>Out Time</center></th>
        <th><center>Options</center></th>
    </tr>

    <?php foreach($visitors as $visitor): ?>
    <tr>
        <td>
            <center><?= $visitor->visitor_name?></center>
        </td>
        <td>
            <center><?= $visitor->visitor_phone ?></center>
        </td>
        <td>
            <center><?= $visitor->visiting_purpose ?></center>
        </td>
        <td>
            <center><?= $visitor->visitor_in_time->format(DATE_RFC850)?></center>
        </td>
        <td>
            <center><?= $visitor->visitor_out_time->format(DATE_RFC850) ?></center>
        </td>
        <td>
            <center><?= $this->Html->link('Edit', ['action' => 'edit', $visitor->slug]) ?></center>
            <center><?= $this->Form->postlink('Delete', ['action' => 'delete', $visitor->slug],['confirm' => 'Are You Sure?'])?></center>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<center><b><?= $this->Html->link('Add Visitor', ['action' => 'add']) ?></b></center>
