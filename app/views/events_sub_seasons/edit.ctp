<div class="eventsSubSeasons form">
<?php echo $form->create('EventsSubSeason');?>
	<fieldset>
 		<legend><?php __('Edit EventsSubSeason');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('sub_season_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EventsSubSeason.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EventsSubSeason.id'))); ?></li>
		<li><?php echo $html->link(__('List EventsSubSeasons', true), array('action'=>'index'));?></li>
	</ul>
</div>
