<!-- File: src/Template/Residents/index.ctp -->
<h2><center>Residents</center></h2>
<table>
    <tr>
        <th><center>Name</center></th>
        <th><center>Email</center></th>
        <th><center>Phone</center></th>
        <th><center>Type</center></th>
        <th><center>Flat No.</center></th>
        <th><center>Options</center></th>
    </tr>

    <?php foreach ($residents as $resident): ?>
    <tr>
        <td>
            <center><?= $resident->res_name ?></center>
        </td>
        <td>
            <center><?= $resident->res_email ?></center>
        </td>
        <td>
            <center><?= $resident->res_phone ?></center>
        </td>
        <td>
            <center><?= $resident->res_type ?></center>
        </td>
        <td>
            <center><?= $resident->res_flat_no ?></center>
        </td>
        <td>
            <center><?= $this->Html->link('Edit', ['action' => 'edit', $resident->slug]) ?></center>
            <center><?= $this->Form->postlink('Delete', ['action' => 'delete', $resident->slug],['confirm' => 'Are You Sure?'])?></center>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<center><b><?= $this->Html->link('Add Resident', ['action' => 'add']) ?></b></center>
