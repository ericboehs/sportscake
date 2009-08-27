<div class="americanFootballEventStates form">
<?php echo $form->create('AmericanFootballEventState');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballEventState');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_id');
		echo $form->input('current_state');
		echo $form->input('sequence_number');
		echo $form->input('period_value');
		echo $form->input('period_time_elapsed');
		echo $form->input('period_time_remaining');
		echo $form->input('clock_state');
		echo $form->input('down');
		echo $form->input('team_in_possession_id');
		echo $form->input('distance_for_1st_down');
		echo $form->input('field_side');
		echo $form->input('field_line');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballEventState.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballEventState.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballEventStates', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Plays', true), array('controller'=> 'american_football_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Play', true), array('controller'=> 'american_football_action_plays', 'action'=>'add')); ?> </li>
	</ul>
</div>
