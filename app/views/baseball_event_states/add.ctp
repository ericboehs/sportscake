<div class="baseballEventStates form">
<?php echo $form->create('BaseballEventState');?>
	<fieldset>
 		<legend><?php __('Add BaseballEventState');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('current_state');
		echo $form->input('sequence_number');
		echo $form->input('at_bat_number');
		echo $form->input('inning_value');
		echo $form->input('inning_half');
		echo $form->input('outs');
		echo $form->input('balls');
		echo $form->input('strikes');
		echo $form->input('runner_on_first_id');
		echo $form->input('runner_on_second_id');
		echo $form->input('runner_on_third_id');
		echo $form->input('runner_on_first');
		echo $form->input('runner_on_second');
		echo $form->input('runner_on_third');
		echo $form->input('runs_this_inning_half');
		echo $form->input('pitcher_id');
		echo $form->input('batter_id');
		echo $form->input('batter_side');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List BaseballEventStates', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Runner On First', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Substitutions', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Substitution', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
