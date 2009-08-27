<div class="iceHockeyEventStates view">
<h2><?php  __('IceHockeyEventState');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['event_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Current State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['current_state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['period_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Time Elapsed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['period_time_elapsed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Time Remaining'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['period_time_remaining']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Context'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyEventState['IceHockeyEventState']['context']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit IceHockeyEventState', true), array('action'=>'edit', $iceHockeyEventState['IceHockeyEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete IceHockeyEventState', true), array('action'=>'delete', $iceHockeyEventState['IceHockeyEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyEventState['IceHockeyEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('List IceHockeyEventStates', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New IceHockeyEventState', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
