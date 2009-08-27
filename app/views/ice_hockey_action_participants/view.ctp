<div class="iceHockeyActionParticipants view">
<h2><?php  __('IceHockeyActionParticipant');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ice Hockey Action Play Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['ice_hockey_action_play_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['person_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Participant Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['participant_role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Point Credit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['point_credit']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals To Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['goals_to_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists To Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['assists_to_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points To Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['points_to_date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit IceHockeyActionParticipant', true), array('action'=>'edit', $iceHockeyActionParticipant['IceHockeyActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete IceHockeyActionParticipant', true), array('action'=>'delete', $iceHockeyActionParticipant['IceHockeyActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyActionParticipant['IceHockeyActionParticipant']['id'])); ?> </li>
		<li><?php echo $html->link(__('List IceHockeyActionParticipants', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New IceHockeyActionParticipant', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
