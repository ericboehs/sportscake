<div class="teamsDocuments form">
<?php echo $form->create('TeamsDocument');?>
	<fieldset>
 		<legend><?php __('Edit TeamsDocument');?></legend>
	<?php
		echo $form->input('team_id');
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('TeamsDocument.team_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('TeamsDocument.team_id'))); ?></li>
		<li><?php echo $html->link(__('List TeamsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
