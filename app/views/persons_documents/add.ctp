<div class="personsDocuments form">
<?php echo $form->create('PersonsDocument');?>
	<fieldset>
 		<legend><?php __('Add PersonsDocument');?></legend>
	<?php
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List PersonsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
