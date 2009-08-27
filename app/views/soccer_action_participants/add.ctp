<div class="soccerActionParticipants form">
<?php echo $form->create('SoccerActionParticipant');?>
	<fieldset>
 		<legend><?php __('Add SoccerActionParticipant');?></legend>
	<?php
		echo $form->input('soccer_action_play_id');
		echo $form->input('person_id');
		echo $form->input('participant_role');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List SoccerActionParticipants', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Soccer Action Plays', true), array('controller'=> 'soccer_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Play', true), array('controller'=> 'soccer_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
