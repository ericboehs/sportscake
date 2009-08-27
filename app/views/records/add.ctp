<div class="records form">
<?php echo $form->create('Record');?>
	<fieldset>
 		<legend><?php __('Add Record');?></legend>
	<?php
		echo $form->input('participant_type');
		echo $form->input('participant_id');
		echo $form->input('record_type');
		echo $form->input('record_label');
		echo $form->input('record_value');
		echo $form->input('previous_value');
		echo $form->input('date_coverage_type');
		echo $form->input('date_coverage_id');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Records', true), array('action'=>'index'));?></li>
	</ul>
</div>
