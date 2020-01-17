<h1><center>Add complaint</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($complaint);
        echo $this->Form->control('id', ['type' => 'hidden']);
        echo $this->Form->control('complaint');
        echo $this->Form->control('complaint_date');
        echo $this->Form->control('c_status',['type' => 'select', 'options' => ['Pending'=>'Pending','Closed'=>'Closed'], 'default' => 'status','required' => true]);
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>
</div>
