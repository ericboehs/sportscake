<div class="baseballActionContactDetails view">
<h2><?php  __('BaseballActionContactDetail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baseball Action Pitch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionContactDetail['BaseballActionPitch']['id'], array('controller'=> 'baseball_action_pitches', 'action'=>'view', $baseballActionContactDetail['BaseballActionPitch']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Strength'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['strength']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Velocity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['velocity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trajectory Coordinates'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['trajectory_coordinates']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trajectory Formula'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionContactDetail['BaseballActionContactDetail']['trajectory_formula']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballActionContactDetail', true), array('action'=>'edit', $baseballActionContactDetail['BaseballActionContactDetail']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballActionContactDetail', true), array('action'=>'delete', $baseballActionContactDetail['BaseballActionContactDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionContactDetail['BaseballActionContactDetail']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballActionContactDetails', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballActionContactDetail', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
	</ul>
</div>
