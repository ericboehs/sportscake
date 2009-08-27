<div class="eventActionFouls form">
<?php echo $form->create('EventActionFoul');?>
	<fieldset>
 		<legend><?php __('Add EventActionFoul');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List EventActionFouls', true), array('action'=>'index'));?></li>
	</ul>
</div>
