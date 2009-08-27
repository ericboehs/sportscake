<div class="americanFootballOffensiveStats view">
<h2><?php  __('AmericanFootballOffensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Offensive Plays Yards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['offensive_plays_yards']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Offensive Plays Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['offensive_plays_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Offensive Plays Average Yards Per'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['offensive_plays_average_yards_per']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Possession Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['possession_duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Turnovers Giveaway'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['turnovers_giveaway']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballOffensiveStat', true), array('action'=>'edit', $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballOffensiveStat', true), array('action'=>'delete', $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballOffensiveStat['AmericanFootballOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballOffensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballOffensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
