<div class="eventActionParticipants form">
<?php echo $form->create('EventActionParticipant');?>
	<fieldset>
 		<legend><?php __('Edit EventActionParticipant');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_state_id');
		echo $form->input('event_action_play_id');
		echo $form->input('person_id');
		echo $form->input('participant_role');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventActionParticipant.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventActionParticipant.id'))); ?></li>
		<li><?php echo $html->link(__('List EventActionParticipants', true), array('action'=>'index'));?></li>
	</ul>
</div>
