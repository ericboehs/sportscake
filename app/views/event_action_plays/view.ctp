<div class="eventActionPlays view">
<h2><?php  __('EventActionPlay');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPlay['EventActionPlay']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event State Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPlay['EventActionPlay']['event_state_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Play Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPlay['EventActionPlay']['play_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score Attempt Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPlay['EventActionPlay']['score_attempt_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Play Result'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPlay['EventActionPlay']['play_result']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPlay['EventActionPlay']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EventActionPlay', true), array('action'=>'edit', $eventActionPlay['EventActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EventActionPlay', true), array('action'=>'delete', $eventActionPlay['EventActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionPlay['EventActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EventActionPlays', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EventActionPlay', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
