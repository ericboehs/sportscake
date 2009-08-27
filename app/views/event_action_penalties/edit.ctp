<div class="eventActionPenalties form">
<?php echo $form->create('EventActionPenalty');?>
	<fieldset>
 		<legend><?php __('Edit EventActionPenalty');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_state_id');
		echo $form->input('penalty_type');
		echo $form->input('penalty_level');
		echo $form->input('caution_level');
		echo $form->input('recipient_type');
		echo $form->input('recipient_id');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventActionPenalty.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventActionPenalty.id'))); ?></li>
		<li><?php echo $html->link(__('List EventActionPenalties', true), array('action'=>'index'));?></li>
	</ul>
</div>
