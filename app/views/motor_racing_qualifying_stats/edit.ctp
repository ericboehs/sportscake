<div class="motorRacingQualifyingStats form">
<?php echo $form->create('MotorRacingQualifyingStat');?>
	<fieldset>
 		<legend><?php __('Edit MotorRacingQualifyingStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('grid');
		echo $form->input('pole_position');
		echo $form->input('pole_wins');
		echo $form->input('qualifying_speed');
		echo $form->input('qualifying_speed_units');
		echo $form->input('qualifying_time');
		echo $form->input('qualifying_position');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('MotorRacingQualifyingStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('MotorRacingQualifyingStat.id'))); ?></li>
		<li><?php echo $html->link(__('List MotorRacingQualifyingStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
