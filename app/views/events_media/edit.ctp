<div class="eventsMedia form">
<?php echo $form->create('EventsMedium');?>
	<fieldset>
 		<legend><?php __('Edit EventsMedium');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventsMedium.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventsMedium.id'))); ?></li>
		<li><?php echo $html->link(__('List EventsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
