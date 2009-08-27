<div class="baseballDefensiveGroups view">
<h2><?php  __('BaseballDefensiveGroup');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballDefensiveGroup['BaseballDefensiveGroup']['id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballDefensiveGroup', true), array('action'=>'edit', $baseballDefensiveGroup['BaseballDefensiveGroup']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballDefensiveGroup', true), array('action'=>'delete', $baseballDefensiveGroup['BaseballDefensiveGroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballDefensiveGroup['BaseballDefensiveGroup']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballDefensiveGroups', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballDefensiveGroup', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Players', true), array('controller'=> 'baseball_defensive_players', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Pitches');?></h3>
	<?php if (!empty($baseballDefensiveGroup['BaseballActionPitch'])):?>
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
		foreach ($baseballDefensiveGroup['BaseballActionPitch'] as $baseballActionPitch):
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
<div class="related">
	<h3><?php __('Related Baseball Action Plays');?></h3>
	<?php if (!empty($baseballDefensiveGroup['BaseballActionPlay'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Baseball Event State Id'); ?></th>
		<th><?php __('Play Type'); ?></th>
		<th><?php __('Out Type'); ?></th>
		<th><?php __('Notation'); ?></th>
		<th><?php __('Notation Yaml'); ?></th>
		<th><?php __('Baseball Defensive Group Id'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Runner On First Advance'); ?></th>
		<th><?php __('Runner On Second Advance'); ?></th>
		<th><?php __('Runner On Third Advance'); ?></th>
		<th><?php __('Outs Recorded'); ?></th>
		<th><?php __('Rbi'); ?></th>
		<th><?php __('Runs Scored'); ?></th>
		<th><?php __('Earned Runs Scored'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($baseballDefensiveGroup['BaseballActionPlay'] as $baseballActionPlay):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionPlay['id'];?></td>
			<td><?php echo $baseballActionPlay['baseball_event_state_id'];?></td>
			<td><?php echo $baseballActionPlay['play_type'];?></td>
			<td><?php echo $baseballActionPlay['out_type'];?></td>
			<td><?php echo $baseballActionPlay['notation'];?></td>
			<td><?php echo $baseballActionPlay['notation_yaml'];?></td>
			<td><?php echo $baseballActionPlay['baseball_defensive_group_id'];?></td>
			<td><?php echo $baseballActionPlay['comment'];?></td>
			<td><?php echo $baseballActionPlay['runner_on_first_advance'];?></td>
			<td><?php echo $baseballActionPlay['runner_on_second_advance'];?></td>
			<td><?php echo $baseballActionPlay['runner_on_third_advance'];?></td>
			<td><?php echo $baseballActionPlay['outs_recorded'];?></td>
			<td><?php echo $baseballActionPlay['rbi'];?></td>
			<td><?php echo $baseballActionPlay['runs_scored'];?></td>
			<td><?php echo $baseballActionPlay['earned_runs_scored'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_plays', 'action'=>'view', $baseballActionPlay['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_plays', 'action'=>'edit', $baseballActionPlay['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_plays', 'action'=>'delete', $baseballActionPlay['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionPlay['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Defensive Players');?></h3>
	<?php if (!empty($baseballDefensiveGroup['BaseballDefensivePlayer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Baseball Defensive Group Id'); ?></th>
		<th><?php __('Player Id'); ?></th>
		<th><?php __('Position Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($baseballDefensiveGroup['BaseballDefensivePlayer'] as $baseballDefensivePlayer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballDefensivePlayer['id'];?></td>
			<td><?php echo $baseballDefensivePlayer['baseball_defensive_group_id'];?></td>
			<td><?php echo $baseballDefensivePlayer['player_id'];?></td>
			<td><?php echo $baseballDefensivePlayer['position_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_defensive_players', 'action'=>'view', $baseballDefensivePlayer['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_defensive_players', 'action'=>'edit', $baseballDefensivePlayer['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_defensive_players', 'action'=>'delete', $baseballDefensivePlayer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballDefensivePlayer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Defensive Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
