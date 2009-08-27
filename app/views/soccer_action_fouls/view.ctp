<div class="soccerActionFouls view">
<h2><?php  __('SoccerActionFoul');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionFoul['SoccerActionFoul']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Soccer Event State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionFoul['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionFoul['SoccerEventState']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foul Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionFoul['SoccerActionFoul']['foul_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foul Result'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionFoul['SoccerActionFoul']['foul_result']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foul Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionFoul['SoccerActionFoul']['foul_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fouler'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionFoul['Fouler']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionFoul['Fouler']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipient Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionFoul['SoccerActionFoul']['recipient_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recipient'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerActionFoul['Recipient']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionFoul['Recipient']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerActionFoul['SoccerActionFoul']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerActionFoul', true), array('action'=>'edit', $soccerActionFoul['SoccerActionFoul']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerActionFoul', true), array('action'=>'delete', $soccerActionFoul['SoccerActionFoul']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionFoul['SoccerActionFoul']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerActionFouls', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerActionFoul', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Fouler', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
