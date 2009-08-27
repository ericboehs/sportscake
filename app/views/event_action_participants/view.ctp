<div class="eventActionParticipants view">
<h2><?php  __('EventActionParticipant');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionParticipant['EventActionParticipant']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event State Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionParticipant['EventActionParticipant']['event_state_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Action Play Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionParticipant['EventActionParticipant']['event_action_play_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionParticipant['EventActionParticipant']['person_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Participant Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionParticipant['EventActionParticipant']['participant_role']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EventActionParticipant', true), array('action'=>'edit', $eventActionParticipant['EventActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EventActionParticipant', true), array('action'=>'delete', $eventActionParticipant['EventActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionParticipant['EventActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EventActionParticipants', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EventActionParticipant', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
