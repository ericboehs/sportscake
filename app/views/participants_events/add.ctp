<div class="participantsEvents form">
<?php echo $form->create('ParticipantsEvent');?>
	<fieldset>
 		<legend><?php __('Add ParticipantsEvent');?></legend>
	<?php
		echo $form->input('participant_type');
		echo $form->input('participant_id');
		echo $form->input('event_id');
		echo $form->input('alignment');
		echo $form->input('score');
		echo $form->input('event_outcome');
		echo $form->input('rank');
		echo $form->input('result_effect');
		echo $form->input('score_attempts');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List ParticipantsEvents', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Periods', true), array('controller'=> 'periods', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Period', true), array('controller'=> 'periods', 'action'=>'add')); ?> </li>
	</ul>
</div>
