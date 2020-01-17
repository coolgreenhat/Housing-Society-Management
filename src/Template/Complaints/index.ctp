<!-- File: src/Template/complaints/index.ctp -->
<h2><center>Complaint Board</center></h2>
<table>
    <tr>
        <th><center>Complaint</center></th>
        <th><center>Date & Time</center></th>
        <th><center>Status</center></th>
        <th><center>Options</center></th>
    </tr>

    <?php foreach ($complaints as $complaint): ?>
    <tr>
        <td>
            <center><?= $complaint->complaint ?></center>
        </td>
        <td>
            <center><?= $complaint->complaint_date->format(DATE_RFC850)?></center>
        </td>
        <td>
            <center><?= $complaint->c_status ?></center>
        </td>
        <td>
            <center><?= $this->Html->link('Edit', ['action' => 'edit', $complaint->slug]) ?></center>
            <center><?= $this->Form->postlink('Delete', ['action' => 'delete', $complaint->slug],['confirm' => 'Are You Sure?'])?></center>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<center><b><?= $this->Html->link('Add Complaint', ['action' => 'add']) ?></b></center>
