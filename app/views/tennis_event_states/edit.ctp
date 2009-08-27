<div class="tennisEventStates form">
<?php echo $form->create('TennisEventState');?>
	<fieldset>
 		<legend><?php __('Edit TennisEventState');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_id');
		echo $form->input('current_state');
		echo $form->input('sequence_number');
		echo $form->input('tennis_set');
		echo $form->input('game');
		echo $form->input('server_person_id');
		echo $form->input('server_score');
		echo $form->input('receiver_person_id');
		echo $form->input('receiver_score');
		echo $form->input('service_number');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('TennisEventState.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('TennisEventState.id'))); ?></li>
		<li><?php echo $html->link(__('List TennisEventStates', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
