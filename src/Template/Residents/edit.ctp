<h1><center>Edit Resident</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($resident);
        echo $this->Form->control('res_id', ['type' => 'hidden']);
        echo $this->Form->control('res_name');
        echo $this->Form->control('res_email');
        echo $this->Form->control('res_phone');
        echo $this->Form->control('res_type',['type' => 'select', 'options' => ['Owner'=> 'Owner','Tenant'=>'Tenant'], 'default' => 'Owner']);
        echo $this->Form->control('res_flat_no',['type' => 'select', 'options' => [1=>1,2,3,4,5,6,7,8,9,10,11,12], 'default' => 'Select']);
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>

</div>
