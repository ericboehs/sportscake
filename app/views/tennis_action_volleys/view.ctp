<div class="tennisActionVolleys view">
<h2><?php  __('TennisActionVolley');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tennis Action Points Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['tennis_action_points_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Landing Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['landing_location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Swing Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['swing_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Result'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['result']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Spin Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['spin_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trajectory Details'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tennisActionVolley['TennisActionVolley']['trajectory_details']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit TennisActionVolley', true), array('action'=>'edit', $tennisActionVolley['TennisActionVolley']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete TennisActionVolley', true), array('action'=>'delete', $tennisActionVolley['TennisActionVolley']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisActionVolley['TennisActionVolley']['id'])); ?> </li>
		<li><?php echo $html->link(__('List TennisActionVolleys', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New TennisActionVolley', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
