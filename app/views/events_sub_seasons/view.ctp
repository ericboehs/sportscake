<div class="eventsSubSeasons view">
<h2><?php  __('EventsSubSeason');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsSubSeason['EventsSubSeason']['event_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Season Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsSubSeason['EventsSubSeason']['sub_season_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EventsSubSeason', true), array('action'=>'edit', $eventsSubSeason['EventsSubSeason']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EventsSubSeason', true), array('action'=>'delete', $eventsSubSeason['EventsSubSeason']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsSubSeason['EventsSubSeason']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EventsSubSeasons', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EventsSubSeason', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
