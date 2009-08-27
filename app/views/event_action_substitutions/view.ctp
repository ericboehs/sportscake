<div class="eventActionSubstitutions view">
<h2><?php  __('EventActionSubstitution');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event State Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['event_state_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Original Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_original_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Original Position Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_original_position_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Replacing Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_replacing_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Replacing Position Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_replacing_position_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Substitution Reason'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['substitution_reason']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EventActionSubstitution', true), array('action'=>'edit', $eventActionSubstitution['EventActionSubstitution']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EventActionSubstitution', true), array('action'=>'delete', $eventActionSubstitution['EventActionSubstitution']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionSubstitution['EventActionSubstitution']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EventActionSubstitutions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EventActionSubstitution', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
