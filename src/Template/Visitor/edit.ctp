<h1><center>Add Visitor</center></h1>
<div class="container">
    <div class="form-group">
        <?php
        echo $this->Form->create($visitor);
        echo $this->Form->control('id', ['type' => 'hidden']);
        echo $this->Form->control('visitor_name');
        echo $this->Form->control('visitor_phone');
        echo $this->Form->control('visiting_purpose');
        echo $this->Form->control('visitor_in_time');
        echo $this->Form->control('visitor_out_time');
        echo $this->Form->button(__('Save'));
        echo $this->Form->end();
        ?>
    </div>
</div>
