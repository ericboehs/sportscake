<div class="tennisActionPoints view">
<h2><?php  __('TennisActionPoint');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionPoint['TennisActionPoint']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Period Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionPoint['TennisActionPoint']['sub_period_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionPoint['TennisActionPoint']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Win Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionPoint['TennisActionPoint']['win_type']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TennisActionPoint', true), array('action'=>'edit', $tennisActionPoint['TennisActionPoint']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TennisActionPoint', true), array('action'=>'delete', $tennisActionPoint['TennisActionPoint']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisActionPoint['TennisActionPoint']['id'])); ?> </li>
		<li><?php echo $html->link(__('List TennisActionPoints', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TennisActionPoint', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
