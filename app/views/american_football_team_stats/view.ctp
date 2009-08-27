<div class="americanFootballTeamStats view">
<h2><?php  __('AmericanFootballTeamStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Yards Per Attempt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['yards_per_attempt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Average Starting Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['average_starting_position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Timeouts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['timeouts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time Of Possession'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['time_of_possession']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Turnover Ratio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballTeamStat['AmericanFootballTeamStat']['turnover_ratio']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballTeamStat', true), array('action'=>'edit', $americanFootballTeamStat['AmericanFootballTeamStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballTeamStat', true), array('action'=>'delete', $americanFootballTeamStat['AmericanFootballTeamStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballTeamStat['AmericanFootballTeamStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballTeamStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballTeamStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
