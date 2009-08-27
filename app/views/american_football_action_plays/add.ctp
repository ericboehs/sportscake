<div class="americanFootballActionPlays form">
<?php echo $form->create('AmericanFootballActionPlay');?>
	<fieldset>
 		<legend><?php __('Add AmericanFootballActionPlay');?></legend>
	<?php
		echo $form->input('american_football_event_state_id');
		echo $form->input('play_type');
		echo $form->input('score_attempt_type');
		echo $form->input('drive_result');
		echo $form->input('points');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AmericanFootballActionPlays', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List American Football Event States', true), array('controller'=> 'american_football_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Event State', true), array('controller'=> 'american_football_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Participants', true), array('controller'=> 'american_football_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Participant', true), array('controller'=> 'american_football_action_participants', 'action'=>'add')); ?> </li>
	</ul>
</div>
