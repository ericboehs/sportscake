<div class="documentContents form">
<?php echo $form->create('DocumentContent');?>
	<fieldset>
 		<legend><?php __('Edit DocumentContent');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('document_id');
		echo $form->input('sportsml');
		echo $form->input('sportsml_blob');
		echo $form->input('abstract');
		echo $form->input('abstract_blob');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('DocumentContent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('DocumentContent.id'))); ?></li>
		<li><?php echo $html->link(__('List DocumentContents', true), array('action'=>'index'));?></li>
	</ul>
</div>
