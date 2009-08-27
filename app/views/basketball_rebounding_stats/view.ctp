<div class="basketballReboundingStats view">
<h2><?php  __('BasketballReboundingStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rebounds Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rebounds Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rebounds Defensive'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_defensive']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rebounds Offensive'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['rebounds_offensive']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team Rebounds Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team Rebounds Per Game'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_per_game']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team Rebounds Defensive'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_defensive']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team Rebounds Offensive'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $basketballReboundingStat['BasketballReboundingStat']['team_rebounds_offensive']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BasketballReboundingStat', true), array('action'=>'edit', $basketballReboundingStat['BasketballReboundingStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BasketballReboundingStat', true), array('action'=>'delete', $basketballReboundingStat['BasketballReboundingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballReboundingStat['BasketballReboundingStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BasketballReboundingStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BasketballReboundingStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
