<div class="baseballDefensiveStats view">
<h2><?php  __('BaseballDefensiveStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Double Plays'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['double_plays']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Triple Plays'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['triple_plays']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Putouts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['putouts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assists'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['assists']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Errors'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['errors']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fielding Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['fielding_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Defensive Average'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['defensive_average']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Errors Passed Ball'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['errors_passed_ball']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Errors Catchers Interference'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveStat['BaseballDefensiveStat']['errors_catchers_interference']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballDefensiveStat', true), array('action'=>'edit', $baseballDefensiveStat['BaseballDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballDefensiveStat', true), array('action'=>'delete', $baseballDefensiveStat['BaseballDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballDefensiveStat['BaseballDefensiveStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballDefensiveStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballDefensiveStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
