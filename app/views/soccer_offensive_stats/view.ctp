<div class="soccerOffensiveStats view">
<h2><?php  __('SoccerOffensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Game Winning'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_game_winning']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Game Tying'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_game_tying']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Overtime'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_overtime']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Shootout'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_shootout']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists Game Winning'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_game_winning']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists Game Tying'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_game_tying']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists Overtime'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_overtime']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['points']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots On Goal Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_on_goal_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Hit Frame'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_hit_frame']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Taken'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_taken']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Scored'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_scored']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Missed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_missed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Shootout Taken'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_taken']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Shootout Scored'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_scored']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Shootout Missed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_missed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Shootout Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Giveaways'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['giveaways']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Offsides'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['offsides']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Corner Kicks'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['corner_kicks']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hat Tricks'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['hat_tricks']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerOffensiveStat', true), array('action'=>'edit', $soccerOffensiveStat['SoccerOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerOffensiveStat', true), array('action'=>'delete', $soccerOffensiveStat['SoccerOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerOffensiveStat['SoccerOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerOffensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerOffensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
