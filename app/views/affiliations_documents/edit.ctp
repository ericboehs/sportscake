<div class="affiliationsDocuments form">
<?php echo $form->create('AffiliationsDocument');?>
	<fieldset>
 		<legend><?php __('Edit AffiliationsDocument');?></legend>
	<?php
		echo $form->input('affiliation_id');
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AffiliationsDocument.affiliation_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AffiliationsDocument.affiliation_id'))); ?></li>
		<li><?php echo $html->link(__('List AffiliationsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
