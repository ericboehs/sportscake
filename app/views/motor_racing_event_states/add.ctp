<div class="motorRacingEventStates form">
<?php echo $form->create('MotorRacingEventState');?>
	<fieldset>
 		<legend><?php __('Add MotorRacingEventState');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('current_state');
		echo $form->input('sequence_number');
		echo $form->input('lap');
		echo $form->input('laps_remaining');
		echo $form->input('time_elapsed');
		echo $form->input('flag_state');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List MotorRacingEventStates', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
