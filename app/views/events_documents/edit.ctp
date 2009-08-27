<div class="eventsDocuments form">
<?php echo $form->create('EventsDocument');?>
	<fieldset>
 		<legend><?php __('Edit EventsDocument');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('document_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventsDocument.event_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventsDocument.event_id'))); ?></li>
		<li><?php echo $html->link(__('List EventsDocuments', true), array('action'=>'index'));?></li>
	</ul>
</div>
