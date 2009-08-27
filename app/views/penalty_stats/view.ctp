<div class="penaltyStats view">
<h2><?php  __('PenaltyStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $penaltyStat['PenaltyStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $penaltyStat['PenaltyStat']['count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $penaltyStat['PenaltyStat']['type']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit PenaltyStat', true), array('action'=>'edit', $penaltyStat['PenaltyStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete PenaltyStat', true), array('action'=>'delete', $penaltyStat['PenaltyStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $penaltyStat['PenaltyStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List PenaltyStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New PenaltyStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
