<div class="baseballActionContactDetails form">
<?php echo $form->create('BaseballActionContactDetail');?>
	<fieldset>
 		<legend><?php __('Edit BaseballActionContactDetail');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('baseball_action_pitch_id');
		echo $form->input('location');
		echo $form->input('strength');
		echo $form->input('velocity');
		echo $form->input('comment');
		echo $form->input('trajectory_coordinates');
		echo $form->input('trajectory_formula');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BaseballActionContactDetail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BaseballActionContactDetail.id'))); ?></li>
		<li><?php echo $html->link(__('List BaseballActionContactDetails', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
	</ul>
</div>
