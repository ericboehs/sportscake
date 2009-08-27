<div class="eventActionSubstitutions form">
<?php echo $form->create('EventActionSubstitution');?>
	<fieldset>
 		<legend><?php __('Edit EventActionSubstitution');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_state_id');
		echo $form->input('person_original_id');
		echo $form->input('person_original_position_id');
		echo $form->input('person_replacing_id');
		echo $form->input('person_replacing_position_id');
		echo $form->input('substitution_reason');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventActionSubstitution.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventActionSubstitution.id'))); ?></li>
		<li><?php echo $html->link(__('List EventActionSubstitutions', true), array('action'=>'index'));?></li>
	</ul>
</div>
