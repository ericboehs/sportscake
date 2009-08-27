<div class="eventsDocuments form">
<?php echo $form->create('EventsDocument');?>
	<fieldset>
 		<legend><?php __('Add EventsDocument');?></legend>
	<?php
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List EventsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
