<div class="baseballActionPlays view">
<h2><?php  __('BaseballActionPlay');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baseball Event State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionPlay['BaseballEventState']['id'], array('controller'=> 'baseball_event_states', 'action'=>'view', $baseballActionPlay['BaseballEventState']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Play Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['play_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Out Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['out_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['notation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notation Yaml'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['notation_yaml']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baseball Defensive Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballActionPlay['BaseballDefensiveGroup']['id'], array('controller'=> 'baseball_defensive_groups', 'action'=>'view', $baseballActionPlay['BaseballDefensiveGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On First Advance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runner_on_first_advance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On Second Advance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runner_on_second_advance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On Third Advance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runner_on_third_advance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Outs Recorded'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['outs_recorded']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rbi'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['rbi']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runs Scored'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runs_scored']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Earned Runs Scored'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballActionPlay['BaseballActionPlay']['earned_runs_scored']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballActionPlay', true), array('action'=>'edit', $baseballActionPlay['BaseballActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballActionPlay', true), array('action'=>'delete', $baseballActionPlay['BaseballActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionPlay['BaseballActionPlay']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballActionPlays', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballActionPlay', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Event States', true), array('controller'=> 'baseball_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Event State', true), array('controller'=> 'baseball_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Pitches');?></h3>
	<?php if (!empty($baseballActionPlay['BaseballActionPitch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Baseball Action Play Id'); ?></th>
		<th><?php __('Sequence Number'); ?></th>
		<th><?php __('Baseball Defensive Group Id'); ?></th>
		<th><?php __('Umpire Call'); ?></th>
		<th><?php __('Pitch Location'); ?></th>
		<th><?php __('Pitch Type'); ?></th>
		<th><?php __('Pitch Velocity'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Trajectory Coordinates'); ?></th>
		<th><?php __('Trajectory Formula'); ?></th>
		<th><?php __('Ball Type'); ?></th>
		<th><?php __('Strike Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($baseballActionPlay['BaseballActionPitch'] as $baseballActionPitch):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionPitch['id'];?></td>
			<td><?php echo $baseballActionPitch['baseball_action_play_id'];?></td>
			<td><?php echo $baseballActionPitch['sequence_number'];?></td>
			<td><?php echo $baseballActionPitch['baseball_defensive_group_id'];?></td>
			<td><?php echo $baseballActionPitch['umpire_call'];?></td>
			<td><?php echo $baseballActionPitch['pitch_location'];?></td>
			<td><?php echo $baseballActionPitch['pitch_type'];?></td>
			<td><?php echo $baseballActionPitch['pitch_velocity'];?></td>
			<td><?php echo $baseballActionPitch['comment'];?></td>
			<td><?php echo $baseballActionPitch['trajectory_coordinates'];?></td>
			<td><?php echo $baseballActionPitch['trajectory_formula'];?></td>
			<td><?php echo $baseballActionPitch['ball_type'];?></td>
			<td><?php echo $baseballActionPitch['strike_type'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_pitches', 'action'=>'view', $baseballActionPitch['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_pitches', 'action'=>'edit', $baseballActionPitch['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_pitches', 'action'=>'delete', $baseballActionPitch['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionPitch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
