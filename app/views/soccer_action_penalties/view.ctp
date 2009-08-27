<div class="soccerActionPenalties view">
<h2><?php  __('SoccerActionPenalty');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Soccer Event State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionPenalty['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionPenalty['SoccerEventState']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['penalty_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['penalty_level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caution Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['caution_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipient Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['recipient_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipient'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionPenalty['Recipient']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionPenalty['Recipient']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionPenalty['SoccerActionPenalty']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerActionPenalty', true), array('action'=>'edit', $soccerActionPenalty['SoccerActionPenalty']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerActionPenalty', true), array('action'=>'delete', $soccerActionPenalty['SoccerActionPenalty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionPenalty['SoccerActionPenalty']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerActionPenalties', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerActionPenalty', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Recipient', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
