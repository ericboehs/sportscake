<div class="americanFootballScoringStats view">
<h2><?php  __('AmericanFootballScoringStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Touchdowns Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Touchdowns Passing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_passing']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Touchdowns Rushing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_rushing']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Touchdowns Special Teams'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_special_teams']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Touchdowns Defensive'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchdowns_defensive']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra Points Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_attempts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra Points Made'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_made']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra Points Missed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_missed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Extra Points Blocked'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['extra_points_blocked']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goal Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goal_attempts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Made'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goals_made']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Missed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goals_missed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Blocked'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['field_goals_blocked']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Safeties Against'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['safeties_against']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Two Point Conversions Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['two_point_conversions_attempts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Two Point Conversions Made'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['two_point_conversions_made']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Touchbacks Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballScoringStat['AmericanFootballScoringStat']['touchbacks_total']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballScoringStat', true), array('action'=>'edit', $americanFootballScoringStat['AmericanFootballScoringStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballScoringStat', true), array('action'=>'delete', $americanFootballScoringStat['AmericanFootballScoringStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballScoringStat['AmericanFootballScoringStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballScoringStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballScoringStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
