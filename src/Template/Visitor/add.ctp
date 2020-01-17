<h1><center>Add Visitor</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($visitor);
        echo $this->Form->control('id', ['type' => 'hidden', 'value' => 3]);
        echo $this->Form->control('visitor_name',['required' => true]);
        echo $this->Form->control('visitor_phone',['required' => true]);
        echo $this->Form->control('visiting_purpose',['required' => true]);
        echo $this->Form->control('visitor_in_time',['required' => true]);
        echo $this->Form->control('visitor_out_time',['required' => true]);
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>
</div>
