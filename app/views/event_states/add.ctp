<div class="eventStates form">
<?php echo $form->create('EventState');?>
	<fieldset>
 		<legend><?php __('Add EventState');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('current_state');
		echo $form->input('sequence_number');
		echo $form->input('period_value');
		echo $form->input('period_time_elapsed');
		echo $form->input('period_time_remaining');
		echo $form->input('minutes_elapsed');
		echo $form->input('period_minutes_elapsed');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List EventStates', true), array('action'=>'index'));?></li>
	</ul>
</div>
