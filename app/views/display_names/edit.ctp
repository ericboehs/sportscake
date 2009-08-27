<div class="displayNames form">
<?php echo $form->create('DisplayName');?>
	<fieldset>
 		<legend><?php __('Edit DisplayName');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('language');
		echo $form->input('entity_type');
		echo $form->input('entity_id');
		echo $form->input('full_name');
		echo $form->input('first_name');
		echo $form->input('middle_name');
		echo $form->input('last_name');
		echo $form->input('alias');
		echo $form->input('abbreviation');
		echo $form->input('short_name');
		echo $form->input('prefix');
		echo $form->input('suffix');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('DisplayName.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('DisplayName.id'))); ?></li>
		<li><?php echo $html->link(__('List DisplayNames', true), array('action'=>'index'));?></li>
	</ul>
</div>
