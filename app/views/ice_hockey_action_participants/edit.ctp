<div class="iceHockeyActionParticipants form">
<?php echo $form->create('IceHockeyActionParticipant');?>
	<fieldset>
 		<legend><?php __('Edit IceHockeyActionParticipant');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('ice_hockey_action_play_id');
		echo $form->input('person_id');
		echo $form->input('participant_role');
		echo $form->input('point_credit');
		echo $form->input('goals_to_date');
		echo $form->input('assists_to_date');
		echo $form->input('points_to_date');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('IceHockeyActionParticipant.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IceHockeyActionParticipant.id'))); ?></li>
		<li><?php echo $html->link(__('List IceHockeyActionParticipants', true), array('action'=>'index'));?></li>
	</ul>
</div>
