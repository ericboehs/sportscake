<div class="motorRacingQualifyingStats form">
<?php echo $form->create('MotorRacingQualifyingStat');?>
	<fieldset>
 		<legend><?php __('Add MotorRacingQualifyingStat');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List MotorRacingQualifyingStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
