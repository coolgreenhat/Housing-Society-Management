<h1><center>Add Resident</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($resident);
        echo $this->Form->control('res_id', ['type' => 'hidden']);
        echo $this->Form->control('res_name', ['required' => true]);
        echo $this->Form->control('res_email',['type' => 'email','required' => true]);
        echo $this->Form->control('res_phone',['required' => true]);
        echo $this->Form->control('res_type',['type' => 'select', 'options' => ['Owner'=> 'Owner','Tenant'=>'Tenant'], 'default' => 'Owner','required' => true]);
        echo $this->Form->control('res_flat_no',['type' => 'select', 'options' => [1=>1,2,3,4,5,6,7,8,9,10,11,12], 'default' => 'Select' ,'required' => true]);
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>
</div>
