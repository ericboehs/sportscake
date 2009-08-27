<div class="iceHockeyEventStates form">
<?php echo $form->create('IceHockeyEventState');?>
	<fieldset>
 		<legend><?php __('Edit IceHockeyEventState');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_id');
		echo $form->input('current_state');
		echo $form->input('sequence_number');
		echo $form->input('period_value');
		echo $form->input('period_time_elapsed');
		echo $form->input('period_time_remaining');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('IceHockeyEventState.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IceHockeyEventState.id'))); ?></li>
		<li><?php echo $html->link(__('List IceHockeyEventStates', true), array('action'=>'index'));?></li>
	</ul>
</div>
