<div class="baseballActionPitches view">
<h2><?php  __('BaseballActionPitch');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baseball Action Play'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionPitch['BaseballActionPlay']['id'], array('controller'=> 'baseball_action_plays', 'action'=>'view', $baseballActionPitch['BaseballActionPlay']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baseball Defensive Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionPitch['BaseballDefensiveGroup']['id'], array('controller'=> 'baseball_defensive_groups', 'action'=>'view', $baseballActionPitch['BaseballDefensiveGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Umpire Call'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['umpire_call']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pitch Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['pitch_location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pitch Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['pitch_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pitch Velocity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['pitch_velocity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trajectory Coordinates'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['trajectory_coordinates']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trajectory Formula'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['trajectory_formula']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ball Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['ball_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Strike Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPitch['BaseballActionPitch']['strike_type']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballActionPitch', true), array('action'=>'edit', $baseballActionPitch['BaseballActionPitch']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballActionPitch', true), array('action'=>'delete', $baseballActionPitch['BaseballActionPitch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionPitch['BaseballActionPitch']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballActionPitches', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballActionPitch', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Contact Details', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Contact Detail', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Contact Details');?></h3>
	<?php if (!empty($baseballActionPitch['BaseballActionContactDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Baseball Action Pitch Id'); ?></th>
		<th><?php __('Location'); ?></th>
		<th><?php __('Strength'); ?></th>
		<th><?php __('Velocity'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Trajectory Coordinates'); ?></th>
		<th><?php __('Trajectory Formula'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($baseballActionPitch['BaseballActionContactDetail'] as $baseballActionContactDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionContactDetail['id'];?></td>
			<td><?php echo $baseballActionContactDetail['baseball_action_pitch_id'];?></td>
			<td><?php echo $baseballActionContactDetail['location'];?></td>
			<td><?php echo $baseballActionContactDetail['strength'];?></td>
			<td><?php echo $baseballActionContactDetail['velocity'];?></td>
			<td><?php echo $baseballActionContactDetail['comment'];?></td>
			<td><?php echo $baseballActionContactDetail['trajectory_coordinates'];?></td>
			<td><?php echo $baseballActionContactDetail['trajectory_formula'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'view', $baseballActionContactDetail['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'edit', $baseballActionContactDetail['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'delete', $baseballActionContactDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionContactDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Contact Detail', true), array('controller'=> 'baseball_action_contact_details', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
