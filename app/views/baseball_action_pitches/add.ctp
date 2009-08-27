<div class="baseballActionPitches form">
<?php echo $form->create('BaseballActionPitch');?>
	<fieldset>
 		<legend><?php __('Add BaseballActionPitch');?></legend>
	<?php
		echo $form->input('baseball_action_play_id');
		echo $form->input('sequence_number');
		echo $form->input('baseball_defensive_group_id');
		echo $form->input('umpire_call');
		echo $form->input('pitch_location');
		echo $form->input('pitch_type');
		echo $form->input('pitch_velocity');
		echo $form->input('comment');
		echo $form->input('trajectory_coordinates');
		echo $form->input('trajectory_formula');
		echo $form->input('ball_type');
		echo $form->input('strike_type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List BaseballActionPitches', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Contact Details', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Contact Detail', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'add')); ?> </li>
	</ul>
</div>
