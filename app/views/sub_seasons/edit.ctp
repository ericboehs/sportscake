<div class="subSeasons form">
<?php echo $form->create('SubSeason');?>
	<fieldset>
 		<legend><?php __('Edit SubSeason');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('sub_season_key');
		echo $form->input('season_id');
		echo $form->input('sub_season_type');
		echo $form->input('start_date_time');
		echo $form->input('end_date_time');
		echo $form->input('Event');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('SubSeason.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SubSeason.id'))); ?></li>
		<li><?php echo $html->link(__('List SubSeasons', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Standings', true), array('controller'=> 'standings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing', true), array('controller'=> 'standings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
