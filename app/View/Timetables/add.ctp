<h2>Add Timetable Slot</h2>
<?php
echo $this->Form->create('Timetable');
echo $this->Form->input('course_id',['options'=>$courses,'default'=>$courseId]);
echo $this->Form->input('day',['type'=>'select','options'=>['Mon'=>'Mon','Tue'=>'Tue','Wed'=>'Wed','Thu'=>'Thu','Fri'=>'Fri','Sat'=>'Sat','Sun'=>'Sun']]);
echo $this->Form->input('start_time',['type'=>'time']);
echo $this->Form->input('end_time',['type'=>'time']);
echo $this->Form->end('Save');
?>
