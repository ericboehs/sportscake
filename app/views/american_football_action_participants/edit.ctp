<div class="americanFootballActionParticipants form">
<?php echo $form->create('AmericanFootballActionParticipant');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballActionParticipant');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('american_football_action_play_id');
		echo $form->input('person_id');
		echo $form->input('participant_role');
		echo $form->input('score_type');
		echo $form->input('field_line');
		echo $form->input('yardage');
		echo $form->input('score_credit');
		echo $form->input('yards_gained');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballActionParticipant.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballActionParticipant.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballActionParticipants', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List American Football Action Plays', true), array('controller'=> 'american_football_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Play', true), array('controller'=> 'american_football_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
