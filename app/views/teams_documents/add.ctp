<div class="teamsDocuments form">
<?php echo $form->create('TeamsDocument');?>
	<fieldset>
 		<legend><?php __('Add TeamsDocument');?></legend>
	<?php
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TeamsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
