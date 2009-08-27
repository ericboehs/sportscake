<div class="coreStats form">
<?php echo $form->create('CoreStat');?>
	<fieldset>
 		<legend><?php __('Edit CoreStat');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('CoreStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('CoreStat.id'))); ?></li>
		<li><?php echo $html->link(__('List CoreStats', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
