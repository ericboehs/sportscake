<div class="iceHockeyOffensiveStats view">
<h2><?php  __('IceHockeyOffensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Game Winning'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_game_winning']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Game Tying'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_game_tying']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Power Play'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_power_play']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Short Handed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_short_handed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Even Strength'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_even_strength']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Empty Net'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_empty_net']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Overtime'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_overtime']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Shootout'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_shootout']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Goals Penalty Shot'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_penalty_shot']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['assists']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['points']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Power Play Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['power_play_amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Power Play Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['power_play_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Taken'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['shots_penalty_shot_taken']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Missed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['shots_penalty_shot_missed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shots Penalty Shot Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['shots_penalty_shot_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Giveaways'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['giveaways']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Minutes Power Play'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['minutes_power_play']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Faceoff Wins'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['faceoff_wins']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Faceoff Losses'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['faceoff_losses']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Faceoff Win Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['faceoff_win_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Scoring Chances'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['scoring_chances']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit IceHockeyOffensiveStat', true), array('action'=>'edit', $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete IceHockeyOffensiveStat', true), array('action'=>'delete', $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List IceHockeyOffensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New IceHockeyOffensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
