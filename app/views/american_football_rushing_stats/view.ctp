<div class="americanFootballRushingStats view">
<h2><?php  __('AmericanFootballRushingStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rushes Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_attempts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rushes Yards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_yards']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rushes Touchdowns'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_touchdowns']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rushing Average Yards Per'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushing_average_yards_per']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rushes First Down'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_first_down']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rushes Longest'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballRushingStat['AmericanFootballRushingStat']['rushes_longest']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballRushingStat', true), array('action'=>'edit', $americanFootballRushingStat['AmericanFootballRushingStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballRushingStat', true), array('action'=>'delete', $americanFootballRushingStat['AmericanFootballRushingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballRushingStat['AmericanFootballRushingStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballRushingStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballRushingStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
