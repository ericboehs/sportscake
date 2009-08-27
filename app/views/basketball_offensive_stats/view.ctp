<div class="basketballOffensiveStats view">
<h2><?php  __('BasketballOffensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Made'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_made']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Attempted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_attempted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Attempted Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_attempted_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Field Goals Percentage Adjusted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_percentage_adjusted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Three Pointers Made'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_made']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Three Pointers Attempted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_attempted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Three Pointers Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Three Pointers Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Three Pointers Attempted Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_attempted_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Free Throws Made'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_made']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Free Throws Attempted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_attempted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Free Throws Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Free Throws Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Free Throws Attempted Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_attempted_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Scored Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Scored Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['assists_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['assists_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Turnovers Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['turnovers_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Turnovers Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['turnovers_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Scored Off Turnovers'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_off_turnovers']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Scored In Paint'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_in_paint']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Scored On Second Chance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_on_second_chance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Points Scored On Fast Break'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_on_fast_break']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BasketballOffensiveStat', true), array('action'=>'edit', $basketballOffensiveStat['BasketballOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BasketballOffensiveStat', true), array('action'=>'delete', $basketballOffensiveStat['BasketballOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballOffensiveStat['BasketballOffensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BasketballOffensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BasketballOffensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
