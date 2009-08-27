<div class="eventActionFouls form">
<?php echo $form->create('EventActionFoul');?>
	<fieldset>
 		<legend><?php __('Edit EventActionFoul');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('event_state_id');
		echo $form->input('foul_name');
		echo $form->input('foul_result');
		echo $form->input('foul_type');
		echo $form->input('fouler_id');
		echo $form->input('recipient_type');
		echo $form->input('recipient_id');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventActionFoul.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventActionFoul.id'))); ?></li>
		<li><?php echo $html->link(__('List EventActionFouls', true), array('action'=>'index'));?></li>
	</ul>
</div>
