<div class="americanFootballDefensiveStats view">
<h2><?php  __('AmericanFootballDefensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tackles Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['tackles_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tackles Solo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['tackles_solo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tackles Assists'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['tackles_assists']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Interceptions Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Interceptions Yards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_yards']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Interceptions Average'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_average']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Interceptions Longest'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_longest']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Interceptions Touchdown'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['interceptions_touchdown']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quarterback Hurries'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['quarterback_hurries']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sacks Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['sacks_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sacks Yards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['sacks_yards']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Passes Defensed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['passes_defensed']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AmericanFootballDefensiveStat', true), array('action'=>'edit', $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AmericanFootballDefensiveStat', true), array('action'=>'delete', $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballDefensiveStat['AmericanFootballDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AmericanFootballDefensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AmericanFootballDefensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
