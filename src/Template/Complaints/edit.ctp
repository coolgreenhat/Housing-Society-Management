<h1><center>Add Resident</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($complaint);
        echo $this->Form->control('id', ['type' => 'hidden']);
        echo $this->Form->control('res_name');
        echo $this->Form->control('complaint');
        echo $this->Form->control('complaint_date');
        echo $this->Form->control('c_status',['type' => 'select', 'options' => ['Pending'=>'Pending','Resolved'=>'Resolved'], 'default' => 'status']);
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>

</div>
