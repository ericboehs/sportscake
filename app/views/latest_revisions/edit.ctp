<div class="latestRevisions form">
<?php echo $form->create('LatestRevision');?>
	<fieldset>
 		<legend><?php __('Edit LatestRevision');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('revision_id');
		echo $form->input('latest_document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('LatestRevision.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('LatestRevision.id'))); ?></li>
		<li><?php echo $html->link(__('List LatestRevisions', true), array('action'=>'index'));?></li>
	</ul>
</div>
