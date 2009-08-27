<div class="soccerActionPlays form">
<?php echo $form->create('SoccerActionPlay');?>
	<fieldset>
 		<legend><?php __('Add SoccerActionPlay');?></legend>
	<?php
		echo $form->input('soccer_event_state_id');
		echo $form->input('play_type');
		echo $form->input('score_attempt_type');
		echo $form->input('play_result');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List SoccerActionPlays', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Participants', true), array('controller'=> 'soccer_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Participant', true), array('controller'=> 'soccer_action_participants', 'action'=>'add')); ?> </li>
	</ul>
</div>
