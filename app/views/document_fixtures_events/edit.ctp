<div class="documentFixturesEvents form">
<?php echo $form->create('DocumentFixturesEvent');?>
	<fieldset>
 		<legend><?php __('Edit DocumentFixturesEvent');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('document_fixture_id');
		echo $form->input('event_id');
		echo $form->input('latest_document_id');
		echo $form->input('last_update');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('DocumentFixturesEvent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('DocumentFixturesEvent.id'))); ?></li>
		<li><?php echo $html->link(__('List DocumentFixturesEvents', true), array('action'=>'index'));?></li>
	</ul>
</div>
