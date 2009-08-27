<div class="tennisPlayerStats view">
<h2><?php  __('TennisPlayerStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Net Points Won'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['net_points_won']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Net Points Played'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['net_points_played']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Won'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['points_won']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['winners']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unforced Errors'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['unforced_errors']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Forehand'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['winners_forehand']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Backhand'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['winners_backhand']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Volley'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisPlayerStat['TennisPlayerStat']['winners_volley']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TennisPlayerStat', true), array('action'=>'edit', $tennisPlayerStat['TennisPlayerStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TennisPlayerStat', true), array('action'=>'delete', $tennisPlayerStat['TennisPlayerStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisPlayerStat['TennisPlayerStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List TennisPlayerStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TennisPlayerStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
