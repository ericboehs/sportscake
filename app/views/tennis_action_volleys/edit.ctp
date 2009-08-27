<div class="tennisActionVolleys form">
<?php echo $form->create('TennisActionVolley');?>
	<fieldset>
 		<legend><?php __('Edit TennisActionVolley');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('TennisActionVolley.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('TennisActionVolley.id'))); ?></li>
		<li><?php echo $html->link(__('List TennisActionVolleys', true), array('action'=>'index'));?></li>
	</ul>
</div>
