<div class="events form">
<?php echo $form->create('Event');?>
	<fieldset>
 		<legend><?php __('Edit Event');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_key');
		echo $form->input('publisher_id');
		echo $form->input('start_date_time');
		echo $form->input('site_id');
		echo $form->input('site_alignment');
		echo $form->input('event_status');
		echo $form->input('duration');
		echo $form->input('attendance');
		echo $form->input('last_update');
		echo $form->input('event_number');
		echo $form->input('round_number');
		echo $form->input('time_certainty');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Event.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Event.id'))); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('action'=>'index'));?></li>
	</ul>
</div>
