<div class="eventStates form">
<?php echo $form->create('EventState');?>
	<fieldset>
 		<legend><?php __('Edit EventState');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventState.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventState.id'))); ?></li>
		<li><?php echo $html->link(__('List EventStates', true), array('action'=>'index'));?></li>
	</ul>
</div>
