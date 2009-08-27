<div class="soccerEventStates view">
<h2><?php  __('SoccerEventState');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soccerEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $soccerEventState['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Current State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['current_state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sequence Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['sequence_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['period_value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Time Elapsed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['period_time_elapsed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Time Remaining'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['period_time_remaining']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Minutes Elapsed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['minutes_elapsed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Minute Elapsed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['period_minute_elapsed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Context'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soccerEventState['SoccerEventState']['context']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SoccerEventState', true), array('action'=>'edit', $soccerEventState['SoccerEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SoccerEventState', true), array('action'=>'delete', $soccerEventState['SoccerEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerEventState['SoccerEventState']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SoccerEventStates', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New SoccerEventState', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Fouls', true), array('controller'=> 'soccer_action_fouls', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Foul', true), array('controller'=> 'soccer_action_fouls', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Penalties', true), array('controller'=> 'soccer_action_penalties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Penalty', true), array('controller'=> 'soccer_action_penalties', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Plays', true), array('controller'=> 'soccer_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Play', true), array('controller'=> 'soccer_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Substitutions', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Substitution', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Fouls');?></h3>
	<?php if (!empty($soccerEventState['SoccerActionFoul'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Soccer Event State Id'); ?></th>
		<th><?php __('Foul Name'); ?></th>
		<th><?php __('Foul Result'); ?></th>
		<th><?php __('Foul Type'); ?></th>
		<th><?php __('Fouler Id'); ?></th>
		<th><?php __('Recipient Type'); ?></th>
		<th><?php __('Recipient Id'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soccerEventState['SoccerActionFoul'] as $soccerActionFoul):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionFoul['id'];?></td>
			<td><?php echo $soccerActionFoul['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionFoul['foul_name'];?></td>
			<td><?php echo $soccerActionFoul['foul_result'];?></td>
			<td><?php echo $soccerActionFoul['foul_type'];?></td>
			<td><?php echo $soccerActionFoul['fouler_id'];?></td>
			<td><?php echo $soccerActionFoul['recipient_type'];?></td>
			<td><?php echo $soccerActionFoul['recipient_id'];?></td>
			<td><?php echo $soccerActionFoul['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_fouls', 'action'=>'view', $soccerActionFoul['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_fouls', 'action'=>'edit', $soccerActionFoul['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_fouls', 'action'=>'delete', $soccerActionFoul['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionFoul['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Foul', true), array('controller'=> 'soccer_action_fouls', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Penalties');?></h3>
	<?php if (!empty($soccerEventState['SoccerActionPenalty'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Soccer Event State Id'); ?></th>
		<th><?php __('Penalty Type'); ?></th>
		<th><?php __('Penalty Level'); ?></th>
		<th><?php __('Caution Value'); ?></th>
		<th><?php __('Recipient Type'); ?></th>
		<th><?php __('Recipient Id'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soccerEventState['SoccerActionPenalty'] as $soccerActionPenalty):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionPenalty['id'];?></td>
			<td><?php echo $soccerActionPenalty['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionPenalty['penalty_type'];?></td>
			<td><?php echo $soccerActionPenalty['penalty_level'];?></td>
			<td><?php echo $soccerActionPenalty['caution_value'];?></td>
			<td><?php echo $soccerActionPenalty['recipient_type'];?></td>
			<td><?php echo $soccerActionPenalty['recipient_id'];?></td>
			<td><?php echo $soccerActionPenalty['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_penalties', 'action'=>'view', $soccerActionPenalty['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_penalties', 'action'=>'edit', $soccerActionPenalty['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_penalties', 'action'=>'delete', $soccerActionPenalty['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionPenalty['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Penalty', true), array('controller'=> 'soccer_action_penalties', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Plays');?></h3>
	<?php if (!empty($soccerEventState['SoccerActionPlay'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Soccer Event State Id'); ?></th>
		<th><?php __('Play Type'); ?></th>
		<th><?php __('Score Attempt Type'); ?></th>
		<th><?php __('Play Result'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soccerEventState['SoccerActionPlay'] as $soccerActionPlay):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionPlay['id'];?></td>
			<td><?php echo $soccerActionPlay['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionPlay['play_type'];?></td>
			<td><?php echo $soccerActionPlay['score_attempt_type'];?></td>
			<td><?php echo $soccerActionPlay['play_result'];?></td>
			<td><?php echo $soccerActionPlay['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_plays', 'action'=>'view', $soccerActionPlay['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_plays', 'action'=>'edit', $soccerActionPlay['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_plays', 'action'=>'delete', $soccerActionPlay['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionPlay['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Play', true), array('controller'=> 'soccer_action_plays', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Substitutions');?></h3>
	<?php if (!empty($soccerEventState['SoccerActionSubstitution'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Soccer Event State Id'); ?></th>
		<th><?php __('Person Type'); ?></th>
		<th><?php __('Person Original Id'); ?></th>
		<th><?php __('Person Original Position Id'); ?></th>
		<th><?php __('Person Replacing Id'); ?></th>
		<th><?php __('Person Replacing Position Id'); ?></th>
		<th><?php __('Substitution Reason'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soccerEventState['SoccerActionSubstitution'] as $soccerActionSubstitution):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionSubstitution['id'];?></td>
			<td><?php echo $soccerActionSubstitution['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionSubstitution['person_type'];?></td>
			<td><?php echo $soccerActionSubstitution['person_original_id'];?></td>
			<td><?php echo $soccerActionSubstitution['person_original_position_id'];?></td>
			<td><?php echo $soccerActionSubstitution['person_replacing_id'];?></td>
			<td><?php echo $soccerActionSubstitution['person_replacing_position_id'];?></td>
			<td><?php echo $soccerActionSubstitution['substitution_reason'];?></td>
			<td><?php echo $soccerActionSubstitution['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'view', $soccerActionSubstitution['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'edit', $soccerActionSubstitution['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'delete', $soccerActionSubstitution['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionSubstitution['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Substitution', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
