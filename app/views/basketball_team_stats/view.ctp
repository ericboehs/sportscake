<div class="basketballTeamStats view">
<h2><?php  __('BasketballTeamStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballTeamStat['BasketballTeamStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Timeouts Left'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballTeamStat['BasketballTeamStat']['timeouts_left']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Largest Lead'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballTeamStat['BasketballTeamStat']['largest_lead']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fouls Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballTeamStat['BasketballTeamStat']['fouls_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Turnover Margin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballTeamStat['BasketballTeamStat']['turnover_margin']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BasketballTeamStat', true), array('action'=>'edit', $basketballTeamStat['BasketballTeamStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BasketballTeamStat', true), array('action'=>'delete', $basketballTeamStat['BasketballTeamStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballTeamStat['BasketballTeamStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BasketballTeamStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BasketballTeamStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
