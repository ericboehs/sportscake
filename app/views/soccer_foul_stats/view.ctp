<div class="soccerFoulStats view">
<h2><?php  __('SoccerFoulStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fouls Suffered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['fouls_suffered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fouls Commited'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['fouls_commited']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cautions Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['cautions_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cautions Pending'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['cautions_pending']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caution Points Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['caution_points_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caution Points Pending'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['caution_points_pending']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ejections Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerFoulStat['SoccerFoulStat']['ejections_total']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerFoulStat', true), array('action'=>'edit', $soccerFoulStat['SoccerFoulStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerFoulStat', true), array('action'=>'delete', $soccerFoulStat['SoccerFoulStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerFoulStat['SoccerFoulStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerFoulStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerFoulStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
