<div class="baseballActionPlays form">
<?php echo $form->create('BaseballActionPlay');?>
	<fieldset>
 		<legend><?php __('Edit BaseballActionPlay');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('baseball_event_state_id');
		echo $form->input('play_type');
		echo $form->input('out_type');
		echo $form->input('notation');
		echo $form->input('notation_yaml');
		echo $form->input('baseball_defensive_group_id');
		echo $form->input('comment');
		echo $form->input('runner_on_first_advance');
		echo $form->input('runner_on_second_advance');
		echo $form->input('runner_on_third_advance');
		echo $form->input('outs_recorded');
		echo $form->input('rbi');
		echo $form->input('runs_scored');
		echo $form->input('earned_runs_scored');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BaseballActionPlay.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BaseballActionPlay.id'))); ?></li>
		<li><?php echo $html->link(__('List BaseballActionPlays', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Baseball Event States', true), array('controller'=> 'baseball_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Event State', true), array('controller'=> 'baseball_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
	</ul>
</div>
