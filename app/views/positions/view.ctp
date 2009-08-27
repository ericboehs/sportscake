<div class="positions view">
<h2><?php  __('Position');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Affiliation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($position['Affiliation']['id'], array('controller'=> 'affiliations', 'action'=>'view', $position['Affiliation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Abbreviation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['abbreviation']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Position', true), array('action'=>'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Position', true), array('action'=>'delete', $position['Position']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $position['Position']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Affiliations', true), array('controller'=> 'affiliations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Affiliation', true), array('controller'=> 'affiliations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Substitutions', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Substitution Person Original Position', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Players', true), array('controller'=> 'baseball_defensive_players', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Core Stats', true), array('controller'=> 'core_stats', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Core Stat', true), array('controller'=> 'core_stats', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Event Action Substitutions', true), array('controller'=> 'event_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event Action Substitution Original', true), array('controller'=> 'event_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Phases', true), array('controller'=> 'person_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Phase', true), array('controller'=> 'person_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Event Metadata', true), array('controller'=> 'person_event_metadata', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Substitutions', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Substitution Person Original Position', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Substitutions');?></h3>
	<?php if (!empty($position['BaseballActionSubstitutionPersonOriginalPosition'])):?>
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
		foreach ($position['BaseballActionSubstitutionPersonOriginalPosition'] as $baseballActionSubstitutionPersonOriginalPosition):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['baseball_event_state_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['sequence_number'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['person_type'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['person_original_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['person_original_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['person_original_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['person_replacing_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['person_replacing_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['person_replacing_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['substitution_reason'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginalPosition['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'view', $baseballActionSubstitutionPersonOriginalPosition['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'edit', $baseballActionSubstitutionPersonOriginalPosition['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'delete', $baseballActionSubstitutionPersonOriginalPosition['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionSubstitutionPersonOriginalPosition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Substitution Person Original Position', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Substitutions');?></h3>
	<?php if (!empty($position['BaseballActionSubstitutionPersonReplacingPosition'])):?>
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
		foreach ($position['BaseballActionSubstitutionPersonReplacingPosition'] as $baseballActionSubstitutionPersonReplacingPosition):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['baseball_event_state_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['sequence_number'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['person_type'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['person_original_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['person_original_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['person_original_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['person_replacing_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['person_replacing_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['person_replacing_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['substitution_reason'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacingPosition['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'view', $baseballActionSubstitutionPersonReplacingPosition['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'edit', $baseballActionSubstitutionPersonReplacingPosition['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'delete', $baseballActionSubstitutionPersonReplacingPosition['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionSubstitutionPersonReplacingPosition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Substitution Person Replacing Position', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Defensive Players');?></h3>
	<?php if (!empty($position['BaseballDefensivePlayer'])):?>
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
		foreach ($position['BaseballDefensivePlayer'] as $baseballDefensivePlayer):
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
<div class="related">
	<h3><?php __('Related Core Stats');?></h3>
	<?php if (!empty($position['CoreStat'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Score'); ?></th>
		<th><?php __('Score Opposing'); ?></th>
		<th><?php __('Score Attempts'); ?></th>
		<th><?php __('Score Attempts Opposing'); ?></th>
		<th><?php __('Score Percentage'); ?></th>
		<th><?php __('Score Percentage Opposing'); ?></th>
		<th><?php __('Time Played Event'); ?></th>
		<th><?php __('Time Played Total'); ?></th>
		<th><?php __('Time Played Event Average'); ?></th>
		<th><?php __('Events Played'); ?></th>
		<th><?php __('Events Started'); ?></th>
		<th><?php __('Position Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['CoreStat'] as $coreStat):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $coreStat['id'];?></td>
			<td><?php echo $coreStat['score'];?></td>
			<td><?php echo $coreStat['score_opposing'];?></td>
			<td><?php echo $coreStat['score_attempts'];?></td>
			<td><?php echo $coreStat['score_attempts_opposing'];?></td>
			<td><?php echo $coreStat['score_percentage'];?></td>
			<td><?php echo $coreStat['score_percentage_opposing'];?></td>
			<td><?php echo $coreStat['time_played_event'];?></td>
			<td><?php echo $coreStat['time_played_total'];?></td>
			<td><?php echo $coreStat['time_played_event_average'];?></td>
			<td><?php echo $coreStat['events_played'];?></td>
			<td><?php echo $coreStat['events_started'];?></td>
			<td><?php echo $coreStat['position_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'core_stats', 'action'=>'view', $coreStat['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'core_stats', 'action'=>'edit', $coreStat['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'core_stats', 'action'=>'delete', $coreStat['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $coreStat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Core Stat', true), array('controller'=> 'core_stats', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Action Substitutions');?></h3>
	<?php if (!empty($position['EventActionSubstitutionOriginal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event State Id'); ?></th>
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
		foreach ($position['EventActionSubstitutionOriginal'] as $eventActionSubstitutionOriginal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventActionSubstitutionOriginal['id'];?></td>
			<td><?php echo $eventActionSubstitutionOriginal['event_state_id'];?></td>
			<td><?php echo $eventActionSubstitutionOriginal['person_original_id'];?></td>
			<td><?php echo $eventActionSubstitutionOriginal['person_original_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionOriginal['person_replacing_id'];?></td>
			<td><?php echo $eventActionSubstitutionOriginal['person_replacing_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionOriginal['substitution_reason'];?></td>
			<td><?php echo $eventActionSubstitutionOriginal['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'event_action_substitutions', 'action'=>'view', $eventActionSubstitutionOriginal['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'event_action_substitutions', 'action'=>'edit', $eventActionSubstitutionOriginal['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'event_action_substitutions', 'action'=>'delete', $eventActionSubstitutionOriginal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionSubstitutionOriginal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Event Action Substitution Original', true), array('controller'=> 'event_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Action Substitutions');?></h3>
	<?php if (!empty($position['EventActionSubstitutionReplacing'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event State Id'); ?></th>
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
		foreach ($position['EventActionSubstitutionReplacing'] as $eventActionSubstitutionReplacing):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventActionSubstitutionReplacing['id'];?></td>
			<td><?php echo $eventActionSubstitutionReplacing['event_state_id'];?></td>
			<td><?php echo $eventActionSubstitutionReplacing['person_original_id'];?></td>
			<td><?php echo $eventActionSubstitutionReplacing['person_original_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionReplacing['person_replacing_id'];?></td>
			<td><?php echo $eventActionSubstitutionReplacing['person_replacing_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionReplacing['substitution_reason'];?></td>
			<td><?php echo $eventActionSubstitutionReplacing['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'event_action_substitutions', 'action'=>'view', $eventActionSubstitutionReplacing['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'event_action_substitutions', 'action'=>'edit', $eventActionSubstitutionReplacing['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'event_action_substitutions', 'action'=>'delete', $eventActionSubstitutionReplacing['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionSubstitutionReplacing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Event Action Substitution Replacing', true), array('controller'=> 'event_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Person Phases');?></h3>
	<?php if (!empty($position['PersonPhase'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Membership Type'); ?></th>
		<th><?php __('Membership Id'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th><?php __('Role Status'); ?></th>
		<th><?php __('Phase Status'); ?></th>
		<th><?php __('Uniform Number'); ?></th>
		<th><?php __('Regular Position Id'); ?></th>
		<th><?php __('Regular Position Depth'); ?></th>
		<th><?php __('Height'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('Start Season Id'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th><?php __('End Season Id'); ?></th>
		<th><?php __('Entry Reason'); ?></th>
		<th><?php __('Exit Reason'); ?></th>
		<th><?php __('Selection Level'); ?></th>
		<th><?php __('Selection Sublevel'); ?></th>
		<th><?php __('Selection Overall'); ?></th>
		<th><?php __('Duration'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['PersonPhase'] as $personPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $personPhase['id'];?></td>
			<td><?php echo $personPhase['person_id'];?></td>
			<td><?php echo $personPhase['membership_type'];?></td>
			<td><?php echo $personPhase['membership_id'];?></td>
			<td><?php echo $personPhase['role_id'];?></td>
			<td><?php echo $personPhase['role_status'];?></td>
			<td><?php echo $personPhase['phase_status'];?></td>
			<td><?php echo $personPhase['uniform_number'];?></td>
			<td><?php echo $personPhase['regular_position_id'];?></td>
			<td><?php echo $personPhase['regular_position_depth'];?></td>
			<td><?php echo $personPhase['height'];?></td>
			<td><?php echo $personPhase['weight'];?></td>
			<td><?php echo $personPhase['start_date_time'];?></td>
			<td><?php echo $personPhase['start_season_id'];?></td>
			<td><?php echo $personPhase['end_date_time'];?></td>
			<td><?php echo $personPhase['end_season_id'];?></td>
			<td><?php echo $personPhase['entry_reason'];?></td>
			<td><?php echo $personPhase['exit_reason'];?></td>
			<td><?php echo $personPhase['selection_level'];?></td>
			<td><?php echo $personPhase['selection_sublevel'];?></td>
			<td><?php echo $personPhase['selection_overall'];?></td>
			<td><?php echo $personPhase['duration'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'person_phases', 'action'=>'view', $personPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'person_phases', 'action'=>'edit', $personPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'person_phases', 'action'=>'delete', $personPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Person Phase', true), array('controller'=> 'person_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Person Event Metadata');?></h3>
	<?php if (!empty($position['PersonEventMetadatum'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Health'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th><?php __('Position Id'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Lineup Slot'); ?></th>
		<th><?php __('Lineup Slot Sequence'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['PersonEventMetadatum'] as $personEventMetadatum):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $personEventMetadatum['id'];?></td>
			<td><?php echo $personEventMetadatum['person_id'];?></td>
			<td><?php echo $personEventMetadatum['event_id'];?></td>
			<td><?php echo $personEventMetadatum['status'];?></td>
			<td><?php echo $personEventMetadatum['health'];?></td>
			<td><?php echo $personEventMetadatum['weight'];?></td>
			<td><?php echo $personEventMetadatum['role_id'];?></td>
			<td><?php echo $personEventMetadatum['position_id'];?></td>
			<td><?php echo $personEventMetadatum['team_id'];?></td>
			<td><?php echo $personEventMetadatum['lineup_slot'];?></td>
			<td><?php echo $personEventMetadatum['lineup_slot_sequence'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'person_event_metadata', 'action'=>'view', $personEventMetadatum['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'person_event_metadata', 'action'=>'edit', $personEventMetadatum['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'person_event_metadata', 'action'=>'delete', $personEventMetadatum['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personEventMetadatum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Substitutions');?></h3>
	<?php if (!empty($position['SoccerActionSubstitutionPersonOriginalPosition'])):?>
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
		foreach ($position['SoccerActionSubstitutionPersonOriginalPosition'] as $soccerActionSubstitutionPersonOriginalPosition):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['person_type'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['person_original_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['person_original_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['person_replacing_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['person_replacing_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['substitution_reason'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonOriginalPosition['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'view', $soccerActionSubstitutionPersonOriginalPosition['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'edit', $soccerActionSubstitutionPersonOriginalPosition['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'delete', $soccerActionSubstitutionPersonOriginalPosition['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionSubstitutionPersonOriginalPosition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Substitution Person Original Position', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Substitutions');?></h3>
	<?php if (!empty($position['SoccerActionSubstitutionPersonReplacingPosition'])):?>
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
		foreach ($position['SoccerActionSubstitutionPersonReplacingPosition'] as $soccerActionSubstitutionPersonReplacingPosition):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['person_type'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['person_original_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['person_original_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['person_replacing_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['person_replacing_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['substitution_reason'];?></td>
			<td><?php echo $soccerActionSubstitutionPersonReplacingPosition['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'view', $soccerActionSubstitutionPersonReplacingPosition['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'edit', $soccerActionSubstitutionPersonReplacingPosition['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'delete', $soccerActionSubstitutionPersonReplacingPosition['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionSubstitutionPersonReplacingPosition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Substitution Person Replacing Position', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
