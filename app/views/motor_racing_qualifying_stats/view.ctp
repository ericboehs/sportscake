<div class="motorRacingQualifyingStats view">
<h2><?php  __('MotorRacingQualifyingStat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['grid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pole Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['pole_position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pole Wins'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['pole_wins']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Qualifying Speed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_speed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Qualifying Speed Units'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_speed_units']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Qualifying Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Qualifying Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $motorRacingQualifyingStat['MotorRacingQualifyingStat']['qualifying_position']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit MotorRacingQualifyingStat', true), array('action'=>'edit', $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete MotorRacingQualifyingStat', true), array('action'=>'delete', $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $motorRacingQualifyingStat['MotorRacingQualifyingStat']['id'])); ?> </li>
		<li><?php echo $html->link(__('List MotorRacingQualifyingStats', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New MotorRacingQualifyingStat', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
