<div class="affiliationsMedia form">
<?php echo $form->create('AffiliationsMedium');?>
	<fieldset>
 		<legend><?php __('Edit AffiliationsMedium');?></legend>
	<?php
		echo $form->input('affiliation_id');
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AffiliationsMedium.affiliation_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AffiliationsMedium.affiliation_id'))); ?></li>
		<li><?php echo $html->link(__('List AffiliationsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
