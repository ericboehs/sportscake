<div class="periods form">
<?php echo $form->create('Period');?>
	<fieldset>
 		<legend><?php __('Add Period');?></legend>
	<?php
		echo $form->input('participant_event_id');
		echo $form->input('period_value');
		echo $form->input('score');
		echo $form->input('label');
		echo $form->input('score_attempts');
		echo $form->input('rank');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Periods', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Participants Events', true), array('controller'=> 'participants_events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Participants Event', true), array('controller'=> 'participants_events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Periods', true), array('controller'=> 'periods', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sub Period', true), array('controller'=> 'periods', 'action'=>'add')); ?> </li>
	</ul>
</div>
