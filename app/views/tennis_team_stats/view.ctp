<div class="tennisTeamStats view">
<h2><?php  __('TennisTeamStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Net Points Won'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['net_points_won']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Net Points Played'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['net_points_played']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Won'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['points_won']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unforced Errors'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['unforced_errors']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Forehand'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners_forehand']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Backhand'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners_backhand']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Winners Volley'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners_volley']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TennisTeamStat', true), array('action'=>'edit', $tennisTeamStat['TennisTeamStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TennisTeamStat', true), array('action'=>'delete', $tennisTeamStat['TennisTeamStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisTeamStat['TennisTeamStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List TennisTeamStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TennisTeamStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
