<div class="soccerEventStates form">
<?php echo $form->create('SoccerEventState');?>
	<fieldset>
 		<legend><?php __('Add SoccerEventState');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('current_state');
		echo $form->input('sequence_number');
		echo $form->input('period_value');
		echo $form->input('period_time_elapsed');
		echo $form->input('period_time_remaining');
		echo $form->input('minutes_elapsed');
		echo $form->input('period_minute_elapsed');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List SoccerEventStates', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Fouls', true), array('controller'=> 'soccer_action_fouls', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Foul', true), array('controller'=> 'soccer_action_fouls', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Penalties', true), array('controller'=> 'soccer_action_penalties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Penalty', true), array('controller'=> 'soccer_action_penalties', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Plays', true), array('controller'=> 'soccer_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Play', true), array('controller'=> 'soccer_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Substitutions', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Substitution', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
