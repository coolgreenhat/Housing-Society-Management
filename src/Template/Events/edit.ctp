<h1><center>Edit Event</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($event);
        echo $this->Form->control('id', ['type' => 'hidden']);
        echo $this->Form->control('e_name');
        echo $this->Form->control('e_date');
        echo $this->Form->control('e_location');
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>
</div>
