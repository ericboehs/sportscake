<div class="americanFootballPenaltiesStats view">
<h2><?php  __('AmericanFootballPenaltiesStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalties Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['penalties_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty Yards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['penalty_yards']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Penalty First Downs'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['penalty_first_downs']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballPenaltiesStat', true), array('action'=>'edit', $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballPenaltiesStat', true), array('action'=>'delete', $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballPenaltiesStat['AmericanFootballPenaltiesStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballPenaltiesStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballPenaltiesStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
