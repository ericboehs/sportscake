<div class="latestRevisions form">
<?php echo $form->create('LatestRevision');?>
	<fieldset>
 		<legend><?php __('Add LatestRevision');?></legend>
	<?php
		echo $form->input('revision_id');
		echo $form->input('latest_document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List LatestRevisions', true), array('action'=>'index'));?></li>
	</ul>
</div>
