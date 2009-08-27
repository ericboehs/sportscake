<div class="affiliationsDocuments form">
<?php echo $form->create('AffiliationsDocument');?>
	<fieldset>
 		<legend><?php __('Add AffiliationsDocument');?></legend>
	<?php
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AffiliationsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
