<div class="tennisSetStats view">
<h2><?php  __('TennisSetStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Net Points Won'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['net_points_won']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Net Points Played'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['net_points_played']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Won'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['points_won']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['winners']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unforced Errors'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['unforced_errors']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Forehand'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['winners_forehand']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Backhand'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['winners_backhand']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Volley'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisSetStat['TennisSetStat']['winners_volley']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TennisSetStat', true), array('action'=>'edit', $tennisSetStat['TennisSetStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TennisSetStat', true), array('action'=>'delete', $tennisSetStat['TennisSetStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisSetStat['TennisSetStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List TennisSetStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TennisSetStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
