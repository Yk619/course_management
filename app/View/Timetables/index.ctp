<h2>Timetable by Course</h2>
<table border="1" cellpadding="10">
<tr>
  <th>Course</th>
  <th>Monday</th>
  <th>Tuesday</th>
  <th>Wednesday</th>
  <th>Thursday</th>
  <th>Friday</th>
  <th>Saturday</th>
  <th>Sunday</th>
</tr>

<?php foreach ($courses as $course): ?>
<tr>
  <td style="background-color:<?= $course['Course']['color'] ?>; color:#fff;">
    <?= h($course['Course']['name']) ?>
  </td>
  <?php 
    $slotsByDay = Hash::combine($course['Timetable'],'{n}.id','{n}','{n}.day'); 
    foreach (['Mon','Tue','Wed','Thu','Fri','Sat','Sun'] as $day): ?>
      <td>
        <?php if (!empty($slotsByDay[$day])): ?>
          <?php foreach ($slotsByDay[$day] as $slot): ?>
            <div style="background:<?= $course['Course']['color'] ?>;color:#fff;margin:3px;padding:4px;border-radius:5px;">
              <?= date('g:i A',strtotime($slot['start_time'])) ?> - <?= date('g:i A',strtotime($slot['end_time'])) ?>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          -
        <?php endif; ?>
      </td>
  <?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>
