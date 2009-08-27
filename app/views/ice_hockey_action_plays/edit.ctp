<div class="iceHockeyActionPlays form">
<?php echo $form->create('IceHockeyActionPlay');?>
	<fieldset>
 		<legend><?php __('Edit IceHockeyActionPlay');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('ice_hockey_event_state_id');
		echo $form->input('play_key');
		echo $form->input('play_type');
		echo $form->input('score_attempt_type');
		echo $form->input('play_result');
		echo $form->input('penalty_type');
		echo $form->input('penalty_length');
		echo $form->input('penalty_code');
		echo $form->input('recipient_type');
		echo $form->input('team_id');
		echo $form->input('strength');
		echo $form->input('location_x');
		echo $form->input('location_y');
		echo $form->input('location_zone');
		echo $form->input('shootout_shot_order');
		echo $form->input('goal_order');
		echo $form->input('shot_type');
		echo $form->input('shot_distance');
		echo $form->input('goal_zone');
		echo $form->input('empty_net');
		echo $form->input('goal_awarded');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('IceHockeyActionPlay.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IceHockeyActionPlay.id'))); ?></li>
		<li><?php echo $html->link(__('List IceHockeyActionPlays', true), array('action'=>'index'));?></li>
	</ul>
</div>
