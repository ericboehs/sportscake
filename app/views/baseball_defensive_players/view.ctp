<div class="baseballDefensivePlayers view">
<h2><?php  __('BaseballDefensivePlayer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensivePlayer['BaseballDefensivePlayer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baseball Defensive Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballDefensivePlayer['BaseballDefensiveGroup']['id'], array('controller'=> 'baseball_defensive_groups', 'action'=>'view', $baseballDefensivePlayer['BaseballDefensiveGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Player'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballDefensivePlayer['Player']['id'], array('controller'=> 'people', 'action'=>'view', $baseballDefensivePlayer['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballDefensivePlayer['Position']['id'], array('controller'=> 'positions', 'action'=>'view', $baseballDefensivePlayer['Position']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballDefensivePlayer', true), array('action'=>'edit', $baseballDefensivePlayer['BaseballDefensivePlayer']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballDefensivePlayer', true), array('action'=>'delete', $baseballDefensivePlayer['BaseballDefensivePlayer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballDefensivePlayer['BaseballDefensivePlayer']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballDefensivePlayers', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballDefensivePlayer', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Player', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
