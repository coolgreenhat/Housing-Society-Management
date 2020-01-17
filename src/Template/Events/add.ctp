<h1><center>Add Event</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($event);
        echo $this->Form->control('id', ['type' => 'hidden', 'value' => 4]);
        echo $this->Form->control('e_name',['required' => true]);
        echo $this->Form->control('e_date',['required' => true]);
        echo $this->Form->control('e_location',['required' => true]);
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>
</div>
