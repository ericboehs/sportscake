<div class="baseballEventStates view">
<h2><?php  __('BaseballEventState');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $baseballEventState['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Current State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['current_state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('At Bat Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['at_bat_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inning Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['inning_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inning Half'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['inning_half']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Outs'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['outs']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Balls'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['balls']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Strikes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['strikes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On First'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballEventState['RunnerOnFirst']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['RunnerOnFirst']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On Second'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballEventState['RunnerOnSecond']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['RunnerOnSecond']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On Third'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballEventState['RunnerOnThird']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['RunnerOnThird']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On First'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['runner_on_first']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On Second'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['runner_on_second']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runner On Third'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['runner_on_third']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Runs This Inning Half'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['runs_this_inning_half']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pitcher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballEventState['Pitcher']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['Pitcher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Batter'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($baseballEventState['Batter']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['Batter']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Batter Side'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['batter_side']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Context'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $baseballEventState['BaseballEventState']['context']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit BaseballEventState', true), array('action'=>'edit', $baseballEventState['BaseballEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete BaseballEventState', true), array('action'=>'delete', $baseballEventState['BaseballEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballEventState['BaseballEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('List BaseballEventStates', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New BaseballEventState', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Runner On First', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Substitutions', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Substitution', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Plays');?></h3>
	<?php if (!empty($baseballEventState['BaseballActionPlay'])):?>
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
		foreach ($baseballEventState['BaseballActionPlay'] as $baseballActionPlay):
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
	<h3><?php __('Related Baseball Action Substitutions');?></h3>
	<?php if (!empty($baseballEventState['BaseballActionSubstitution'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Baseball Event State Id'); ?></th>
		<th><?php __('Sequence Number'); ?></th>
		<th><?php __('Person Type'); ?></th>
		<th><?php __('Person Original Id'); ?></th>
		<th><?php __('Person Original Position Id'); ?></th>
		<th><?php __('Person Original Lineup Slot'); ?></th>
		<th><?php __('Person Replacing Id'); ?></th>
		<th><?php __('Person Replacing Position Id'); ?></th>
		<th><?php __('Person Replacing Lineup Slot'); ?></th>
		<th><?php __('Substitution Reason'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($baseballEventState['BaseballActionSubstitution'] as $baseballActionSubstitution):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionSubstitution['id'];?></td>
			<td><?php echo $baseballActionSubstitution['baseball_event_state_id'];?></td>
			<td><?php echo $baseballActionSubstitution['sequence_number'];?></td>
			<td><?php echo $baseballActionSubstitution['person_type'];?></td>
			<td><?php echo $baseballActionSubstitution['person_original_id'];?></td>
			<td><?php echo $baseballActionSubstitution['person_original_position_id'];?></td>
			<td><?php echo $baseballActionSubstitution['person_original_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitution['person_replacing_id'];?></td>
			<td><?php echo $baseballActionSubstitution['person_replacing_position_id'];?></td>
			<td><?php echo $baseballActionSubstitution['person_replacing_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitution['substitution_reason'];?></td>
			<td><?php echo $baseballActionSubstitution['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'view', $baseballActionSubstitution['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'edit', $baseballActionSubstitution['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'delete', $baseballActionSubstitution['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionSubstitution['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Substitution', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
