<div class="documents form">
<?php echo $form->create('Document');?>
	<fieldset>
 		<legend><?php __('Add Document');?></legend>
	<?php
		echo $form->input('doc_id');
		echo $form->input('publisher_id');
		echo $form->input('date_time');
		echo $form->input('title');
		echo $form->input('language');
		echo $form->input('priority');
		echo $form->input('revision_id');
		echo $form->input('stats_coverage');
		echo $form->input('document_fixture_id');
		echo $form->input('source_id');
		echo $form->input('db_loading_date_time');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Documents', true), array('action'=>'index'));?></li>
	</ul>
</div>
