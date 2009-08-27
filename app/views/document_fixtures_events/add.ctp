<div class="documentFixturesEvents form">
<?php echo $form->create('DocumentFixturesEvent');?>
	<fieldset>
 		<legend><?php __('Add DocumentFixturesEvent');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List DocumentFixturesEvents', true), array('action'=>'index'));?></li>
	</ul>
</div>
