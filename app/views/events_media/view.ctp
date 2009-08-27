<div class="eventsMedia view">
<h2><?php  __('EventsMedium');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsMedium['EventsMedium']['event_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Media Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsMedium['EventsMedium']['media_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EventsMedium', true), array('action'=>'edit', $eventsMedium['EventsMedium']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EventsMedium', true), array('action'=>'delete', $eventsMedium['EventsMedium']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsMedium['EventsMedium']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EventsMedia', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EventsMedium', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
