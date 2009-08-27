<div class="eventActionPenalties view">
<h2><?php  __('EventActionPenalty');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event State Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['event_state_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['penalty_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['penalty_level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caution Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['caution_level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipient Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['recipient_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipient Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['recipient_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionPenalty['EventActionPenalty']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EventActionPenalty', true), array('action'=>'edit', $eventActionPenalty['EventActionPenalty']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EventActionPenalty', true), array('action'=>'delete', $eventActionPenalty['EventActionPenalty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionPenalty['EventActionPenalty']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EventActionPenalties', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EventActionPenalty', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
