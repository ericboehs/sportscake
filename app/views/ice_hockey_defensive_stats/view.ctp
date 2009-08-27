<div class="iceHockeyDefensiveStats view">
<h2><?php  __('IceHockeyDefensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Power Play Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_power_play_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_penalty_shot_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Power Play Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_power_play_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Penalty Shot Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_penalty_shot_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Against Average'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_against_average']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Saves'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['saves']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Save Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['save_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty Killing Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['penalty_killing_amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty Killing Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['penalty_killing_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Blocked'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_blocked']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Takeaways'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['takeaways']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shutouts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shutouts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Minutes Penalty Killing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['minutes_penalty_killing']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hits'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['hits']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Empty Net Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_empty_net_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Short Handed Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_short_handed_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Shootout Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_shootout_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Shootout Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_shootout_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goaltender Wins'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goaltender_wins']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goaltender Losses'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goaltender_losses']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goaltender Ties'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goaltender_ties']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['goals_allowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Allowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['shots_allowed']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit IceHockeyDefensiveStat', true), array('action'=>'edit', $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete IceHockeyDefensiveStat', true), array('action'=>'delete', $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyDefensiveStat['IceHockeyDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List IceHockeyDefensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New IceHockeyDefensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
