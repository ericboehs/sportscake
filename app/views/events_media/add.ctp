<div class="eventsMedia form">
<?php echo $form->create('EventsMedium');?>
	<fieldset>
 		<legend><?php __('Add EventsMedium');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List EventsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
