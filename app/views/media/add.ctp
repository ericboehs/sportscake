<div class="media form">
<?php echo $form->create('Media');?>
	<fieldset>
 		<legend><?php __('Add Media');?></legend>
	<?php
		echo $form->input('object_id');
		echo $form->input('source_id');
		echo $form->input('revision_id');
		echo $form->input('media_type');
		echo $form->input('publisher_id');
		echo $form->input('date_time');
		echo $form->input('credit_id');
		echo $form->input('db_loading_date_time');
		echo $form->input('creation_location_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Media', true), array('action'=>'index'));?></li>
	</ul>
</div>
