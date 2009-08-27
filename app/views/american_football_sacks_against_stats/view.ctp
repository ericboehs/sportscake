<div class="americanFootballSacksAgainstStats view">
<h2><?php  __('AmericanFootballSacksAgainstStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballSacksAgainstStat['AmericanFootballSacksAgainstStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sacks Against Yards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballSacksAgainstStat['AmericanFootballSacksAgainstStat']['sacks_against_yards']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sacks Against Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballSacksAgainstStat['AmericanFootballSacksAgainstStat']['sacks_against_total']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballSacksAgainstStat', true), array('action'=>'edit', $americanFootballSacksAgainstStat['AmericanFootballSacksAgainstStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballSacksAgainstStat', true), array('action'=>'delete', $americanFootballSacksAgainstStat['AmericanFootballSacksAgainstStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballSacksAgainstStat['AmericanFootballSacksAgainstStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballSacksAgainstStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballSacksAgainstStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
