<h2>Add Course</h2>
<?php 
echo $this->Form->create('Course');
echo $this->Form->input('name');
echo $this->Form->input('color',['type'=>'color']);
echo $this->Form->end('Save');
?>