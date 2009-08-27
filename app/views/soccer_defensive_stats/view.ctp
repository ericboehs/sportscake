<div class="soccerDefensiveStats view">
<h2><?php  __('SoccerDefensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_penalty_shot_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Penalty Shot Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['goals_penalty_shot_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Against Average'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['goals_against_average']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Against Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['goals_against_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Saves'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['saves']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Save Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['save_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Catches Punches'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['catches_punches']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots On Goal Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_on_goal_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Shootout Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_shootout_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Shootout Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_shootout_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Blocked'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_blocked']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shutouts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shutouts']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerDefensiveStat', true), array('action'=>'edit', $soccerDefensiveStat['SoccerDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerDefensiveStat', true), array('action'=>'delete', $soccerDefensiveStat['SoccerDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerDefensiveStat['SoccerDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerDefensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerDefensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
