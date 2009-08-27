<div class="americanFootballDownProgressStats view">
<h2><?php  __('AmericanFootballDownProgressStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Downs Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Downs Pass'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_pass']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Downs Run'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_run']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Downs Penalty'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['first_downs_penalty']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conversions Third Down'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_third_down']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conversions Third Down Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_third_down_attempts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conversions Third Down Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_third_down_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conversions Fourth Down'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_fourth_down']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conversions Fourth Down Attempts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_fourth_down_attempts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conversions Fourth Down Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['conversions_fourth_down_percentage']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballDownProgressStat', true), array('action'=>'edit', $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballDownProgressStat', true), array('action'=>'delete', $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballDownProgressStat['AmericanFootballDownProgressStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballDownProgressStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballDownProgressStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
