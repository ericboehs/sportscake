<div class="personsDocuments form">
<?php echo $form->create('PersonsDocument');?>
	<fieldset>
 		<legend><?php __('Edit PersonsDocument');?></legend>
	<?php
		echo $form->input('person_id');
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('PersonsDocument.person_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('PersonsDocument.person_id'))); ?></li>
		<li><?php echo $html->link(__('List PersonsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
