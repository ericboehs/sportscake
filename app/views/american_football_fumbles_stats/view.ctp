<div class="americanFootballFumblesStats view">
<h2><?php  __('AmericanFootballFumblesStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Committed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_committed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Forced'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_forced']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Recovered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_recovered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Lost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_lost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Yards Gained'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_yards_gained']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Own Committed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_committed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Own Recovered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_recovered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Own Lost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_lost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Own Yards Gained'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_own_yards_gained']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Opposing Committed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_committed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Opposing Recovered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_recovered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Opposing Lost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_lost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fumbles Opposing Yards Gained'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballFumblesStat['AmericanFootballFumblesStat']['fumbles_opposing_yards_gained']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballFumblesStat', true), array('action'=>'edit', $americanFootballFumblesStat['AmericanFootballFumblesStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballFumblesStat', true), array('action'=>'delete', $americanFootballFumblesStat['AmericanFootballFumblesStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballFumblesStat['AmericanFootballFumblesStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballFumblesStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballFumblesStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
