<div class="basketballDefensiveStats view">
<h2><?php  __('BasketballDefensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Steals Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['steals_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Steals Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['steals_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Blocks Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['blocks_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Blocks Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballDefensiveStat['BasketballDefensiveStat']['blocks_per_game']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BasketballDefensiveStat', true), array('action'=>'edit', $basketballDefensiveStat['BasketballDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BasketballDefensiveStat', true), array('action'=>'delete', $basketballDefensiveStat['BasketballDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballDefensiveStat['BasketballDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BasketballDefensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BasketballDefensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
