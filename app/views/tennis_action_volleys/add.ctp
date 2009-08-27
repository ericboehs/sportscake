<div class="tennisActionVolleys form">
<?php echo $form->create('TennisActionVolley');?>
	<fieldset>
 		<legend><?php __('Add TennisActionVolley');?></legend>
	<?php
		echo $form->input('sequence_number');
		echo $form->input('tennis_action_points_id');
		echo $form->input('landing_location');
		echo $form->input('swing_type');
		echo $form->input('result');
		echo $form->input('spin_type');
		echo $form->input('trajectory_details');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TennisActionVolleys', true), array('action'=>'index'));?></li>
	</ul>
</div>
