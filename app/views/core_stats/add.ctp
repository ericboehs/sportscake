<div class="coreStats form">
<?php echo $form->create('CoreStat');?>
	<fieldset>
 		<legend><?php __('Add CoreStat');?></legend>
	<?php
		echo $form->input('score');
		echo $form->input('score_opposing');
		echo $form->input('score_attempts');
		echo $form->input('score_attempts_opposing');
		echo $form->input('score_percentage');
		echo $form->input('score_percentage_opposing');
		echo $form->input('time_played_event');
		echo $form->input('time_played_total');
		echo $form->input('time_played_event_average');
		echo $form->input('events_played');
		echo $form->input('events_started');
		echo $form->input('position_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List CoreStats', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
