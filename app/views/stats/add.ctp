<div class="stats form">
<?php echo $form->create('Stat');?>
	<fieldset>
 		<legend><?php __('Add Stat');?></legend>
	<?php
		echo $form->input('stat_repository_type');
		echo $form->input('stat_repository_id');
		echo $form->input('stat_holder_type');
		echo $form->input('stat_holder_id');
		echo $form->input('stat_coverage_type');
		echo $form->input('stat_coverage_id');
		echo $form->input('stat_membership_type');
		echo $form->input('stat_membership_id');
		echo $form->input('context');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Stats', true), array('action'=>'index'));?></li>
	</ul>
</div>
