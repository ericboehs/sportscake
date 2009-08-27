<div class="people view">
<h2><?php  __('Person');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['person_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($person['Publisher']['id'], array('controller'=> 'publishers', 'action'=>'view', $person['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birth Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['birth_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Death Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['death_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birth Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($person['BirthLocation']['id'], array('controller'=> 'locations', 'action'=>'view', $person['BirthLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hometown Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($person['HometownLocation']['id'], array('controller'=> 'locations', 'action'=>'view', $person['HometownLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Residence Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($person['ResidenceLocation']['id'], array('controller'=> 'locations', 'action'=>'view', $person['ResidenceLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Death Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($person['DeathLocation']['id'], array('controller'=> 'locations', 'action'=>'view', $person['DeathLocation']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Person', true), array('action'=>'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Person', true), array('action'=>'delete', $person['Person']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['Person']['id'])); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller'=> 'publishers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller'=> 'publishers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller'=> 'locations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Birth Location', true), array('controller'=> 'locations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Participants', true), array('controller'=> 'american_football_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Participant', true), array('controller'=> 'american_football_action_participants', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Substitutions', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Substitution Person Original', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Players', true), array('controller'=> 'baseball_defensive_players', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Player Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Event States', true), array('controller'=> 'baseball_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Event State Batter', true), array('controller'=> 'baseball_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Event Action Participants', true), array('controller'=> 'event_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event Action Participant', true), array('controller'=> 'event_action_participants', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Event Action Substitutions', true), array('controller'=> 'event_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event Action Substitution Person Original', true), array('controller'=> 'event_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ice Hockey Action Participants', true), array('controller'=> 'ice_hockey_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ice Hockey Action Participant', true), array('controller'=> 'ice_hockey_action_participants', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Injury Phases', true), array('controller'=> 'injury_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Injury Phase', true), array('controller'=> 'injury_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Event Metadata', true), array('controller'=> 'person_event_metadata', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Phases', true), array('controller'=> 'person_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Phase', true), array('controller'=> 'person_phases', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Rankings', true), array('controller'=> 'rankings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ranking', true), array('controller'=> 'rankings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Records', true), array('controller'=> 'records', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Record', true), array('controller'=> 'records', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Fouls', true), array('controller'=> 'soccer_action_fouls', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Foul Fouler', true), array('controller'=> 'soccer_action_fouls', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Participants', true), array('controller'=> 'soccer_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Participant', true), array('controller'=> 'soccer_action_participants', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Penalties', true), array('controller'=> 'soccer_action_penalties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Penalty', true), array('controller'=> 'soccer_action_penalties', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Substitutions', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Substitution Original', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Tennis Event States', true), array('controller'=> 'tennis_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tennis Event State Server Person', true), array('controller'=> 'tennis_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Moneylines', true), array('controller'=> 'wagering_moneylines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Moneyline', true), array('controller'=> 'wagering_moneylines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Odds Lines', true), array('controller'=> 'wagering_odds_lines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Odds Line', true), array('controller'=> 'wagering_odds_lines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Runlines', true), array('controller'=> 'wagering_runlines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Runline', true), array('controller'=> 'wagering_runlines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Straight Spread Lines', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Straight Spread Line', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Wagering Total Score Lines', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Wagering Total Score Line', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Documents', true), array('controller'=> 'documents', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Document', true), array('controller'=> 'documents', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related American Football Action Participants');?></h3>
	<?php if (!empty($person['AmericanFootballActionParticipant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('American Football Action Play Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Participant Role'); ?></th>
		<th><?php __('Score Type'); ?></th>
		<th><?php __('Field Line'); ?></th>
		<th><?php __('Yardage'); ?></th>
		<th><?php __('Score Credit'); ?></th>
		<th><?php __('Yards Gained'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['AmericanFootballActionParticipant'] as $americanFootballActionParticipant):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $americanFootballActionParticipant['id'];?></td>
			<td><?php echo $americanFootballActionParticipant['american_football_action_play_id'];?></td>
			<td><?php echo $americanFootballActionParticipant['person_id'];?></td>
			<td><?php echo $americanFootballActionParticipant['participant_role'];?></td>
			<td><?php echo $americanFootballActionParticipant['score_type'];?></td>
			<td><?php echo $americanFootballActionParticipant['field_line'];?></td>
			<td><?php echo $americanFootballActionParticipant['yardage'];?></td>
			<td><?php echo $americanFootballActionParticipant['score_credit'];?></td>
			<td><?php echo $americanFootballActionParticipant['yards_gained'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'american_football_action_participants', 'action'=>'view', $americanFootballActionParticipant['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'american_football_action_participants', 'action'=>'edit', $americanFootballActionParticipant['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'american_football_action_participants', 'action'=>'delete', $americanFootballActionParticipant['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballActionParticipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New American Football Action Participant', true), array('controller'=> 'american_football_action_participants', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Substitutions');?></h3>
	<?php if (!empty($person['BaseballActionSubstitutionPersonOriginal'])):?>
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
		foreach ($person['BaseballActionSubstitutionPersonOriginal'] as $baseballActionSubstitutionPersonOriginal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['baseball_event_state_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['sequence_number'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['person_type'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['person_original_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['person_original_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['person_original_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['person_replacing_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['person_replacing_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['person_replacing_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['substitution_reason'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonOriginal['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'view', $baseballActionSubstitutionPersonOriginal['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'edit', $baseballActionSubstitutionPersonOriginal['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'delete', $baseballActionSubstitutionPersonOriginal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionSubstitutionPersonOriginal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Substitution Person Original', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Action Substitutions');?></h3>
	<?php if (!empty($person['BaseballActionSubstitutionPersonReplacing'])):?>
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
		foreach ($person['BaseballActionSubstitutionPersonReplacing'] as $baseballActionSubstitutionPersonReplacing):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['baseball_event_state_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['sequence_number'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['person_type'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['person_original_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['person_original_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['person_original_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['person_replacing_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['person_replacing_position_id'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['person_replacing_lineup_slot'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['substitution_reason'];?></td>
			<td><?php echo $baseballActionSubstitutionPersonReplacing['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'view', $baseballActionSubstitutionPersonReplacing['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'edit', $baseballActionSubstitutionPersonReplacing['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'delete', $baseballActionSubstitutionPersonReplacing['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionSubstitutionPersonReplacing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Action Substitution Person Replacing', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Defensive Players');?></h3>
	<?php if (!empty($person['BaseballDefensivePlayerPlayer'])):?>
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
		foreach ($person['BaseballDefensivePlayerPlayer'] as $baseballDefensivePlayerPlayer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballDefensivePlayerPlayer['id'];?></td>
			<td><?php echo $baseballDefensivePlayerPlayer['baseball_defensive_group_id'];?></td>
			<td><?php echo $baseballDefensivePlayerPlayer['player_id'];?></td>
			<td><?php echo $baseballDefensivePlayerPlayer['position_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_defensive_players', 'action'=>'view', $baseballDefensivePlayerPlayer['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_defensive_players', 'action'=>'edit', $baseballDefensivePlayerPlayer['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_defensive_players', 'action'=>'delete', $baseballDefensivePlayerPlayer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballDefensivePlayerPlayer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Defensive Player Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Event States');?></h3>
	<?php if (!empty($person['BaseballEventStateBatter'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Current State'); ?></th>
		<th><?php __('Sequence Number'); ?></th>
		<th><?php __('At Bat Number'); ?></th>
		<th><?php __('Inning Value'); ?></th>
		<th><?php __('Inning Half'); ?></th>
		<th><?php __('Outs'); ?></th>
		<th><?php __('Balls'); ?></th>
		<th><?php __('Strikes'); ?></th>
		<th><?php __('Runner On First Id'); ?></th>
		<th><?php __('Runner On Second Id'); ?></th>
		<th><?php __('Runner On Third Id'); ?></th>
		<th><?php __('Runner On First'); ?></th>
		<th><?php __('Runner On Second'); ?></th>
		<th><?php __('Runner On Third'); ?></th>
		<th><?php __('Runs This Inning Half'); ?></th>
		<th><?php __('Pitcher Id'); ?></th>
		<th><?php __('Batter Id'); ?></th>
		<th><?php __('Batter Side'); ?></th>
		<th><?php __('Context'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['BaseballEventStateBatter'] as $baseballEventStateBatter):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballEventStateBatter['id'];?></td>
			<td><?php echo $baseballEventStateBatter['event_id'];?></td>
			<td><?php echo $baseballEventStateBatter['current_state'];?></td>
			<td><?php echo $baseballEventStateBatter['sequence_number'];?></td>
			<td><?php echo $baseballEventStateBatter['at_bat_number'];?></td>
			<td><?php echo $baseballEventStateBatter['inning_value'];?></td>
			<td><?php echo $baseballEventStateBatter['inning_half'];?></td>
			<td><?php echo $baseballEventStateBatter['outs'];?></td>
			<td><?php echo $baseballEventStateBatter['balls'];?></td>
			<td><?php echo $baseballEventStateBatter['strikes'];?></td>
			<td><?php echo $baseballEventStateBatter['runner_on_first_id'];?></td>
			<td><?php echo $baseballEventStateBatter['runner_on_second_id'];?></td>
			<td><?php echo $baseballEventStateBatter['runner_on_third_id'];?></td>
			<td><?php echo $baseballEventStateBatter['runner_on_first'];?></td>
			<td><?php echo $baseballEventStateBatter['runner_on_second'];?></td>
			<td><?php echo $baseballEventStateBatter['runner_on_third'];?></td>
			<td><?php echo $baseballEventStateBatter['runs_this_inning_half'];?></td>
			<td><?php echo $baseballEventStateBatter['pitcher_id'];?></td>
			<td><?php echo $baseballEventStateBatter['batter_id'];?></td>
			<td><?php echo $baseballEventStateBatter['batter_side'];?></td>
			<td><?php echo $baseballEventStateBatter['context'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_event_states', 'action'=>'view', $baseballEventStateBatter['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_event_states', 'action'=>'edit', $baseballEventStateBatter['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_event_states', 'action'=>'delete', $baseballEventStateBatter['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballEventStateBatter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Event State Batter', true), array('controller'=> 'baseball_event_states', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Baseball Event States');?></h3>
	<?php if (!empty($person['BaseballEventStatePitcher'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Current State'); ?></th>
		<th><?php __('Sequence Number'); ?></th>
		<th><?php __('At Bat Number'); ?></th>
		<th><?php __('Inning Value'); ?></th>
		<th><?php __('Inning Half'); ?></th>
		<th><?php __('Outs'); ?></th>
		<th><?php __('Balls'); ?></th>
		<th><?php __('Strikes'); ?></th>
		<th><?php __('Runner On First Id'); ?></th>
		<th><?php __('Runner On Second Id'); ?></th>
		<th><?php __('Runner On Third Id'); ?></th>
		<th><?php __('Runner On First'); ?></th>
		<th><?php __('Runner On Second'); ?></th>
		<th><?php __('Runner On Third'); ?></th>
		<th><?php __('Runs This Inning Half'); ?></th>
		<th><?php __('Pitcher Id'); ?></th>
		<th><?php __('Batter Id'); ?></th>
		<th><?php __('Batter Side'); ?></th>
		<th><?php __('Context'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['BaseballEventStatePitcher'] as $baseballEventStatePitcher):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseballEventStatePitcher['id'];?></td>
			<td><?php echo $baseballEventStatePitcher['event_id'];?></td>
			<td><?php echo $baseballEventStatePitcher['current_state'];?></td>
			<td><?php echo $baseballEventStatePitcher['sequence_number'];?></td>
			<td><?php echo $baseballEventStatePitcher['at_bat_number'];?></td>
			<td><?php echo $baseballEventStatePitcher['inning_value'];?></td>
			<td><?php echo $baseballEventStatePitcher['inning_half'];?></td>
			<td><?php echo $baseballEventStatePitcher['outs'];?></td>
			<td><?php echo $baseballEventStatePitcher['balls'];?></td>
			<td><?php echo $baseballEventStatePitcher['strikes'];?></td>
			<td><?php echo $baseballEventStatePitcher['runner_on_first_id'];?></td>
			<td><?php echo $baseballEventStatePitcher['runner_on_second_id'];?></td>
			<td><?php echo $baseballEventStatePitcher['runner_on_third_id'];?></td>
			<td><?php echo $baseballEventStatePitcher['runner_on_first'];?></td>
			<td><?php echo $baseballEventStatePitcher['runner_on_second'];?></td>
			<td><?php echo $baseballEventStatePitcher['runner_on_third'];?></td>
			<td><?php echo $baseballEventStatePitcher['runs_this_inning_half'];?></td>
			<td><?php echo $baseballEventStatePitcher['pitcher_id'];?></td>
			<td><?php echo $baseballEventStatePitcher['batter_id'];?></td>
			<td><?php echo $baseballEventStatePitcher['batter_side'];?></td>
			<td><?php echo $baseballEventStatePitcher['context'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'baseball_event_states', 'action'=>'view', $baseballEventStatePitcher['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'baseball_event_states', 'action'=>'edit', $baseballEventStatePitcher['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'baseball_event_states', 'action'=>'delete', $baseballEventStatePitcher['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballEventStatePitcher['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Baseball Event State Pitcher', true), array('controller'=> 'baseball_event_states', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Action Participants');?></h3>
	<?php if (!empty($person['EventActionParticipant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event State Id'); ?></th>
		<th><?php __('Event Action Play Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Participant Role'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['EventActionParticipant'] as $eventActionParticipant):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventActionParticipant['id'];?></td>
			<td><?php echo $eventActionParticipant['event_state_id'];?></td>
			<td><?php echo $eventActionParticipant['event_action_play_id'];?></td>
			<td><?php echo $eventActionParticipant['person_id'];?></td>
			<td><?php echo $eventActionParticipant['participant_role'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'event_action_participants', 'action'=>'view', $eventActionParticipant['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'event_action_participants', 'action'=>'edit', $eventActionParticipant['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'event_action_participants', 'action'=>'delete', $eventActionParticipant['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionParticipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Event Action Participant', true), array('controller'=> 'event_action_participants', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Action Substitutions');?></h3>
	<?php if (!empty($person['EventActionSubstitutionPersonOriginal'])):?>
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
		foreach ($person['EventActionSubstitutionPersonOriginal'] as $eventActionSubstitutionPersonOriginal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventActionSubstitutionPersonOriginal['id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonOriginal['event_state_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonOriginal['person_original_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonOriginal['person_original_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonOriginal['person_replacing_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonOriginal['person_replacing_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonOriginal['substitution_reason'];?></td>
			<td><?php echo $eventActionSubstitutionPersonOriginal['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'event_action_substitutions', 'action'=>'view', $eventActionSubstitutionPersonOriginal['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'event_action_substitutions', 'action'=>'edit', $eventActionSubstitutionPersonOriginal['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'event_action_substitutions', 'action'=>'delete', $eventActionSubstitutionPersonOriginal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionSubstitutionPersonOriginal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Event Action Substitution Person Original', true), array('controller'=> 'event_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Action Substitutions');?></h3>
	<?php if (!empty($person['EventActionSubstitutionPersonReplacing'])):?>
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
		foreach ($person['EventActionSubstitutionPersonReplacing'] as $eventActionSubstitutionPersonReplacing):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventActionSubstitutionPersonReplacing['id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonReplacing['event_state_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonReplacing['person_original_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonReplacing['person_original_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonReplacing['person_replacing_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonReplacing['person_replacing_position_id'];?></td>
			<td><?php echo $eventActionSubstitutionPersonReplacing['substitution_reason'];?></td>
			<td><?php echo $eventActionSubstitutionPersonReplacing['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'event_action_substitutions', 'action'=>'view', $eventActionSubstitutionPersonReplacing['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'event_action_substitutions', 'action'=>'edit', $eventActionSubstitutionPersonReplacing['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'event_action_substitutions', 'action'=>'delete', $eventActionSubstitutionPersonReplacing['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionSubstitutionPersonReplacing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Event Action Substitution Person Replacing', true), array('controller'=> 'event_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Ice Hockey Action Participants');?></h3>
	<?php if (!empty($person['IceHockeyActionParticipant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ice Hockey Action Play Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Participant Role'); ?></th>
		<th><?php __('Point Credit'); ?></th>
		<th><?php __('Goals To Date'); ?></th>
		<th><?php __('Assists To Date'); ?></th>
		<th><?php __('Points To Date'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['IceHockeyActionParticipant'] as $iceHockeyActionParticipant):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $iceHockeyActionParticipant['id'];?></td>
			<td><?php echo $iceHockeyActionParticipant['ice_hockey_action_play_id'];?></td>
			<td><?php echo $iceHockeyActionParticipant['person_id'];?></td>
			<td><?php echo $iceHockeyActionParticipant['participant_role'];?></td>
			<td><?php echo $iceHockeyActionParticipant['point_credit'];?></td>
			<td><?php echo $iceHockeyActionParticipant['goals_to_date'];?></td>
			<td><?php echo $iceHockeyActionParticipant['assists_to_date'];?></td>
			<td><?php echo $iceHockeyActionParticipant['points_to_date'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'ice_hockey_action_participants', 'action'=>'view', $iceHockeyActionParticipant['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'ice_hockey_action_participants', 'action'=>'edit', $iceHockeyActionParticipant['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'ice_hockey_action_participants', 'action'=>'delete', $iceHockeyActionParticipant['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyActionParticipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Ice Hockey Action Participant', true), array('controller'=> 'ice_hockey_action_participants', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Injury Phases');?></h3>
	<?php if (!empty($person['InjuryPhase'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Injury Status'); ?></th>
		<th><?php __('Injury Type'); ?></th>
		<th><?php __('Injury Comment'); ?></th>
		<th><?php __('Disabled List'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th><?php __('Season Id'); ?></th>
		<th><?php __('Phase Type'); ?></th>
		<th><?php __('Injury Side'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['InjuryPhase'] as $injuryPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $injuryPhase['id'];?></td>
			<td><?php echo $injuryPhase['person_id'];?></td>
			<td><?php echo $injuryPhase['injury_status'];?></td>
			<td><?php echo $injuryPhase['injury_type'];?></td>
			<td><?php echo $injuryPhase['injury_comment'];?></td>
			<td><?php echo $injuryPhase['disabled_list'];?></td>
			<td><?php echo $injuryPhase['start_date_time'];?></td>
			<td><?php echo $injuryPhase['end_date_time'];?></td>
			<td><?php echo $injuryPhase['season_id'];?></td>
			<td><?php echo $injuryPhase['phase_type'];?></td>
			<td><?php echo $injuryPhase['injury_side'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'injury_phases', 'action'=>'view', $injuryPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'injury_phases', 'action'=>'edit', $injuryPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'injury_phases', 'action'=>'delete', $injuryPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $injuryPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Injury Phase', true), array('controller'=> 'injury_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Media');?></h3>
	<?php if (!empty($person['Media'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Object Id'); ?></th>
		<th><?php __('Source Id'); ?></th>
		<th><?php __('Revision Id'); ?></th>
		<th><?php __('Media Type'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Credit Id'); ?></th>
		<th><?php __('Db Loading Date Time'); ?></th>
		<th><?php __('Creation Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Media'] as $media):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $media['id'];?></td>
			<td><?php echo $media['object_id'];?></td>
			<td><?php echo $media['source_id'];?></td>
			<td><?php echo $media['revision_id'];?></td>
			<td><?php echo $media['media_type'];?></td>
			<td><?php echo $media['publisher_id'];?></td>
			<td><?php echo $media['date_time'];?></td>
			<td><?php echo $media['credit_id'];?></td>
			<td><?php echo $media['db_loading_date_time'];?></td>
			<td><?php echo $media['creation_location_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'media', 'action'=>'view', $media['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'media', 'action'=>'edit', $media['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'media', 'action'=>'delete', $media['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $media['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Person Event Metadata');?></h3>
	<?php if (!empty($person['PersonEventMetadatum'])):?>
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
		foreach ($person['PersonEventMetadatum'] as $personEventMetadatum):
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
	<h3><?php __('Related Person Phases');?></h3>
	<?php if (!empty($person['PersonPhase'])):?>
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
		foreach ($person['PersonPhase'] as $personPhase):
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
	<h3><?php __('Related Rankings');?></h3>
	<?php if (!empty($person['Ranking'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Document Fixture Id'); ?></th>
		<th><?php __('Participant Type'); ?></th>
		<th><?php __('Participant Id'); ?></th>
		<th><?php __('Issuer'); ?></th>
		<th><?php __('Ranking Type'); ?></th>
		<th><?php __('Ranking Value'); ?></th>
		<th><?php __('Ranking Value Previous'); ?></th>
		<th><?php __('Date Coverage Type'); ?></th>
		<th><?php __('Date Coverage Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Ranking'] as $ranking):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ranking['id'];?></td>
			<td><?php echo $ranking['document_fixture_id'];?></td>
			<td><?php echo $ranking['participant_type'];?></td>
			<td><?php echo $ranking['participant_id'];?></td>
			<td><?php echo $ranking['issuer'];?></td>
			<td><?php echo $ranking['ranking_type'];?></td>
			<td><?php echo $ranking['ranking_value'];?></td>
			<td><?php echo $ranking['ranking_value_previous'];?></td>
			<td><?php echo $ranking['date_coverage_type'];?></td>
			<td><?php echo $ranking['date_coverage_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'rankings', 'action'=>'view', $ranking['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'rankings', 'action'=>'edit', $ranking['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'rankings', 'action'=>'delete', $ranking['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ranking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Ranking', true), array('controller'=> 'rankings', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Records');?></h3>
	<?php if (!empty($person['Record'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Participant Type'); ?></th>
		<th><?php __('Participant Id'); ?></th>
		<th><?php __('Record Type'); ?></th>
		<th><?php __('Record Label'); ?></th>
		<th><?php __('Record Value'); ?></th>
		<th><?php __('Previous Value'); ?></th>
		<th><?php __('Date Coverage Type'); ?></th>
		<th><?php __('Date Coverage Id'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Record'] as $record):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $record['id'];?></td>
			<td><?php echo $record['participant_type'];?></td>
			<td><?php echo $record['participant_id'];?></td>
			<td><?php echo $record['record_type'];?></td>
			<td><?php echo $record['record_label'];?></td>
			<td><?php echo $record['record_value'];?></td>
			<td><?php echo $record['previous_value'];?></td>
			<td><?php echo $record['date_coverage_type'];?></td>
			<td><?php echo $record['date_coverage_id'];?></td>
			<td><?php echo $record['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'records', 'action'=>'view', $record['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'records', 'action'=>'edit', $record['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'records', 'action'=>'delete', $record['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $record['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Record', true), array('controller'=> 'records', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Fouls');?></h3>
	<?php if (!empty($person['SoccerActionFoulFouler'])):?>
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
		foreach ($person['SoccerActionFoulFouler'] as $soccerActionFoulFouler):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionFoulFouler['id'];?></td>
			<td><?php echo $soccerActionFoulFouler['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionFoulFouler['foul_name'];?></td>
			<td><?php echo $soccerActionFoulFouler['foul_result'];?></td>
			<td><?php echo $soccerActionFoulFouler['foul_type'];?></td>
			<td><?php echo $soccerActionFoulFouler['fouler_id'];?></td>
			<td><?php echo $soccerActionFoulFouler['recipient_type'];?></td>
			<td><?php echo $soccerActionFoulFouler['recipient_id'];?></td>
			<td><?php echo $soccerActionFoulFouler['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_fouls', 'action'=>'view', $soccerActionFoulFouler['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_fouls', 'action'=>'edit', $soccerActionFoulFouler['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_fouls', 'action'=>'delete', $soccerActionFoulFouler['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionFoulFouler['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Foul Fouler', true), array('controller'=> 'soccer_action_fouls', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Fouls');?></h3>
	<?php if (!empty($person['SoccerActionFoulRecipient'])):?>
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
		foreach ($person['SoccerActionFoulRecipient'] as $soccerActionFoulRecipient):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionFoulRecipient['id'];?></td>
			<td><?php echo $soccerActionFoulRecipient['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionFoulRecipient['foul_name'];?></td>
			<td><?php echo $soccerActionFoulRecipient['foul_result'];?></td>
			<td><?php echo $soccerActionFoulRecipient['foul_type'];?></td>
			<td><?php echo $soccerActionFoulRecipient['fouler_id'];?></td>
			<td><?php echo $soccerActionFoulRecipient['recipient_type'];?></td>
			<td><?php echo $soccerActionFoulRecipient['recipient_id'];?></td>
			<td><?php echo $soccerActionFoulRecipient['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_fouls', 'action'=>'view', $soccerActionFoulRecipient['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_fouls', 'action'=>'edit', $soccerActionFoulRecipient['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_fouls', 'action'=>'delete', $soccerActionFoulRecipient['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionFoulRecipient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Foul Recipient', true), array('controller'=> 'soccer_action_fouls', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Participants');?></h3>
	<?php if (!empty($person['SoccerActionParticipant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Soccer Action Play Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Participant Role'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['SoccerActionParticipant'] as $soccerActionParticipant):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionParticipant['id'];?></td>
			<td><?php echo $soccerActionParticipant['soccer_action_play_id'];?></td>
			<td><?php echo $soccerActionParticipant['person_id'];?></td>
			<td><?php echo $soccerActionParticipant['participant_role'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_participants', 'action'=>'view', $soccerActionParticipant['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_participants', 'action'=>'edit', $soccerActionParticipant['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_participants', 'action'=>'delete', $soccerActionParticipant['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionParticipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Participant', true), array('controller'=> 'soccer_action_participants', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Penalties');?></h3>
	<?php if (!empty($person['SoccerActionPenalty'])):?>
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
		foreach ($person['SoccerActionPenalty'] as $soccerActionPenalty):
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
	<h3><?php __('Related Soccer Action Substitutions');?></h3>
	<?php if (!empty($person['SoccerActionSubstitutionOriginal'])):?>
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
		foreach ($person['SoccerActionSubstitutionOriginal'] as $soccerActionSubstitutionOriginal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionSubstitutionOriginal['id'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['person_type'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['person_original_id'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['person_original_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['person_replacing_id'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['person_replacing_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['substitution_reason'];?></td>
			<td><?php echo $soccerActionSubstitutionOriginal['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'view', $soccerActionSubstitutionOriginal['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'edit', $soccerActionSubstitutionOriginal['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'delete', $soccerActionSubstitutionOriginal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionSubstitutionOriginal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Substitution Original', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Participants');?></h3>
	<?php if (!empty($person['SoccerActionParticipantReceiverPerson'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Soccer Action Play Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Participant Role'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['SoccerActionParticipantReceiverPerson'] as $soccerActionParticipantReceiverPerson):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionParticipantReceiverPerson['id'];?></td>
			<td><?php echo $soccerActionParticipantReceiverPerson['soccer_action_play_id'];?></td>
			<td><?php echo $soccerActionParticipantReceiverPerson['person_id'];?></td>
			<td><?php echo $soccerActionParticipantReceiverPerson['participant_role'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_participants', 'action'=>'view', $soccerActionParticipantReceiverPerson['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_participants', 'action'=>'edit', $soccerActionParticipantReceiverPerson['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_participants', 'action'=>'delete', $soccerActionParticipantReceiverPerson['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionParticipantReceiverPerson['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Participant Receiver Person', true), array('controller'=> 'soccer_action_participants', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Soccer Action Substitutions');?></h3>
	<?php if (!empty($person['SoccerActionSubstitutionReplacing'])):?>
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
		foreach ($person['SoccerActionSubstitutionReplacing'] as $soccerActionSubstitutionReplacing):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soccerActionSubstitutionReplacing['id'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['soccer_event_state_id'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['person_type'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['person_original_id'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['person_original_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['person_replacing_id'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['person_replacing_position_id'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['substitution_reason'];?></td>
			<td><?php echo $soccerActionSubstitutionReplacing['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'view', $soccerActionSubstitutionReplacing['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'edit', $soccerActionSubstitutionReplacing['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'delete', $soccerActionSubstitutionReplacing['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionSubstitutionReplacing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soccer Action Substitution Replacing', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tennis Event States');?></h3>
	<?php if (!empty($person['TennisEventStateServerPerson'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Current State'); ?></th>
		<th><?php __('Sequence Number'); ?></th>
		<th><?php __('Tennis Set'); ?></th>
		<th><?php __('Game'); ?></th>
		<th><?php __('Server Person Id'); ?></th>
		<th><?php __('Server Score'); ?></th>
		<th><?php __('Receiver Person Id'); ?></th>
		<th><?php __('Receiver Score'); ?></th>
		<th><?php __('Service Number'); ?></th>
		<th><?php __('Context'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['TennisEventStateServerPerson'] as $tennisEventStateServerPerson):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tennisEventStateServerPerson['id'];?></td>
			<td><?php echo $tennisEventStateServerPerson['event_id'];?></td>
			<td><?php echo $tennisEventStateServerPerson['current_state'];?></td>
			<td><?php echo $tennisEventStateServerPerson['sequence_number'];?></td>
			<td><?php echo $tennisEventStateServerPerson['tennis_set'];?></td>
			<td><?php echo $tennisEventStateServerPerson['game'];?></td>
			<td><?php echo $tennisEventStateServerPerson['server_person_id'];?></td>
			<td><?php echo $tennisEventStateServerPerson['server_score'];?></td>
			<td><?php echo $tennisEventStateServerPerson['receiver_person_id'];?></td>
			<td><?php echo $tennisEventStateServerPerson['receiver_score'];?></td>
			<td><?php echo $tennisEventStateServerPerson['service_number'];?></td>
			<td><?php echo $tennisEventStateServerPerson['context'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'tennis_event_states', 'action'=>'view', $tennisEventStateServerPerson['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'tennis_event_states', 'action'=>'edit', $tennisEventStateServerPerson['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'tennis_event_states', 'action'=>'delete', $tennisEventStateServerPerson['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisEventStateServerPerson['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Tennis Event State Server Person', true), array('controller'=> 'tennis_event_states', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tennis Event States');?></h3>
	<?php if (!empty($person['TennisEventStateReceiverPerson'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Current State'); ?></th>
		<th><?php __('Sequence Number'); ?></th>
		<th><?php __('Tennis Set'); ?></th>
		<th><?php __('Game'); ?></th>
		<th><?php __('Server Person Id'); ?></th>
		<th><?php __('Server Score'); ?></th>
		<th><?php __('Receiver Person Id'); ?></th>
		<th><?php __('Receiver Score'); ?></th>
		<th><?php __('Service Number'); ?></th>
		<th><?php __('Context'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['TennisEventStateReceiverPerson'] as $tennisEventStateReceiverPerson):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tennisEventStateReceiverPerson['id'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['event_id'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['current_state'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['sequence_number'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['tennis_set'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['game'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['server_person_id'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['server_score'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['receiver_person_id'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['receiver_score'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['service_number'];?></td>
			<td><?php echo $tennisEventStateReceiverPerson['context'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'tennis_event_states', 'action'=>'view', $tennisEventStateReceiverPerson['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'tennis_event_states', 'action'=>'edit', $tennisEventStateReceiverPerson['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'tennis_event_states', 'action'=>'delete', $tennisEventStateReceiverPerson['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisEventStateReceiverPerson['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Tennis Event State Receiver Person', true), array('controller'=> 'tennis_event_states', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Moneylines');?></h3>
	<?php if (!empty($person['WageringMoneyline'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line'); ?></th>
		<th><?php __('Line Opening'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['WageringMoneyline'] as $wageringMoneyline):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringMoneyline['id'];?></td>
			<td><?php echo $wageringMoneyline['bookmaker_id'];?></td>
			<td><?php echo $wageringMoneyline['event_id'];?></td>
			<td><?php echo $wageringMoneyline['date_time'];?></td>
			<td><?php echo $wageringMoneyline['team_id'];?></td>
			<td><?php echo $wageringMoneyline['person_id'];?></td>
			<td><?php echo $wageringMoneyline['rotation_key'];?></td>
			<td><?php echo $wageringMoneyline['comment'];?></td>
			<td><?php echo $wageringMoneyline['vigorish'];?></td>
			<td><?php echo $wageringMoneyline['line'];?></td>
			<td><?php echo $wageringMoneyline['line_opening'];?></td>
			<td><?php echo $wageringMoneyline['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_moneylines', 'action'=>'view', $wageringMoneyline['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_moneylines', 'action'=>'edit', $wageringMoneyline['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_moneylines', 'action'=>'delete', $wageringMoneyline['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringMoneyline['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Moneyline', true), array('controller'=> 'wagering_moneylines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Odds Lines');?></h3>
	<?php if (!empty($person['WageringOddsLine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Numerator'); ?></th>
		<th><?php __('Denominator'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th><?php __('Payout Calculation'); ?></th>
		<th><?php __('Payout Amount'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['WageringOddsLine'] as $wageringOddsLine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringOddsLine['id'];?></td>
			<td><?php echo $wageringOddsLine['bookmaker_id'];?></td>
			<td><?php echo $wageringOddsLine['event_id'];?></td>
			<td><?php echo $wageringOddsLine['date_time'];?></td>
			<td><?php echo $wageringOddsLine['team_id'];?></td>
			<td><?php echo $wageringOddsLine['person_id'];?></td>
			<td><?php echo $wageringOddsLine['rotation_key'];?></td>
			<td><?php echo $wageringOddsLine['comment'];?></td>
			<td><?php echo $wageringOddsLine['numerator'];?></td>
			<td><?php echo $wageringOddsLine['denominator'];?></td>
			<td><?php echo $wageringOddsLine['prediction'];?></td>
			<td><?php echo $wageringOddsLine['payout_calculation'];?></td>
			<td><?php echo $wageringOddsLine['payout_amount'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_odds_lines', 'action'=>'view', $wageringOddsLine['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_odds_lines', 'action'=>'edit', $wageringOddsLine['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_odds_lines', 'action'=>'delete', $wageringOddsLine['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringOddsLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Odds Line', true), array('controller'=> 'wagering_odds_lines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Runlines');?></h3>
	<?php if (!empty($person['WageringRunline'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line'); ?></th>
		<th><?php __('Line Opening'); ?></th>
		<th><?php __('Line Value'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['WageringRunline'] as $wageringRunline):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringRunline['id'];?></td>
			<td><?php echo $wageringRunline['bookmaker_id'];?></td>
			<td><?php echo $wageringRunline['event_id'];?></td>
			<td><?php echo $wageringRunline['date_time'];?></td>
			<td><?php echo $wageringRunline['team_id'];?></td>
			<td><?php echo $wageringRunline['person_id'];?></td>
			<td><?php echo $wageringRunline['rotation_key'];?></td>
			<td><?php echo $wageringRunline['comment'];?></td>
			<td><?php echo $wageringRunline['vigorish'];?></td>
			<td><?php echo $wageringRunline['line'];?></td>
			<td><?php echo $wageringRunline['line_opening'];?></td>
			<td><?php echo $wageringRunline['line_value'];?></td>
			<td><?php echo $wageringRunline['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_runlines', 'action'=>'view', $wageringRunline['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_runlines', 'action'=>'edit', $wageringRunline['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_runlines', 'action'=>'delete', $wageringRunline['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringRunline['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Runline', true), array('controller'=> 'wagering_runlines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Straight Spread Lines');?></h3>
	<?php if (!empty($person['WageringStraightSpreadLine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line Value'); ?></th>
		<th><?php __('Line Value Opening'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['WageringStraightSpreadLine'] as $wageringStraightSpreadLine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringStraightSpreadLine['id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['bookmaker_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['event_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['date_time'];?></td>
			<td><?php echo $wageringStraightSpreadLine['team_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['person_id'];?></td>
			<td><?php echo $wageringStraightSpreadLine['rotation_key'];?></td>
			<td><?php echo $wageringStraightSpreadLine['comment'];?></td>
			<td><?php echo $wageringStraightSpreadLine['vigorish'];?></td>
			<td><?php echo $wageringStraightSpreadLine['line_value'];?></td>
			<td><?php echo $wageringStraightSpreadLine['line_value_opening'];?></td>
			<td><?php echo $wageringStraightSpreadLine['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'view', $wageringStraightSpreadLine['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'edit', $wageringStraightSpreadLine['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'delete', $wageringStraightSpreadLine['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringStraightSpreadLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Straight Spread Line', true), array('controller'=> 'wagering_straight_spread_lines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Total Score Lines');?></h3>
	<?php if (!empty($person['WageringTotalScoreLine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bookmaker Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Rotation Key'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Vigorish'); ?></th>
		<th><?php __('Line Over'); ?></th>
		<th><?php __('Line Under'); ?></th>
		<th><?php __('Total'); ?></th>
		<th><?php __('Total Opening'); ?></th>
		<th><?php __('Prediction'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['WageringTotalScoreLine'] as $wageringTotalScoreLine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wageringTotalScoreLine['id'];?></td>
			<td><?php echo $wageringTotalScoreLine['bookmaker_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['event_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['date_time'];?></td>
			<td><?php echo $wageringTotalScoreLine['team_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['person_id'];?></td>
			<td><?php echo $wageringTotalScoreLine['rotation_key'];?></td>
			<td><?php echo $wageringTotalScoreLine['comment'];?></td>
			<td><?php echo $wageringTotalScoreLine['vigorish'];?></td>
			<td><?php echo $wageringTotalScoreLine['line_over'];?></td>
			<td><?php echo $wageringTotalScoreLine['line_under'];?></td>
			<td><?php echo $wageringTotalScoreLine['total'];?></td>
			<td><?php echo $wageringTotalScoreLine['total_opening'];?></td>
			<td><?php echo $wageringTotalScoreLine['prediction'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'view', $wageringTotalScoreLine['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'edit', $wageringTotalScoreLine['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'delete', $wageringTotalScoreLine['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wageringTotalScoreLine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wagering Total Score Line', true), array('controller'=> 'wagering_total_score_lines', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Documents');?></h3>
	<?php if (!empty($person['Document'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Doc Id'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Date Time'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Language'); ?></th>
		<th><?php __('Priority'); ?></th>
		<th><?php __('Revision Id'); ?></th>
		<th><?php __('Stats Coverage'); ?></th>
		<th><?php __('Document Fixture Id'); ?></th>
		<th><?php __('Source Id'); ?></th>
		<th><?php __('Db Loading Date Time'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Document'] as $document):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $document['id'];?></td>
			<td><?php echo $document['doc_id'];?></td>
			<td><?php echo $document['publisher_id'];?></td>
			<td><?php echo $document['date_time'];?></td>
			<td><?php echo $document['title'];?></td>
			<td><?php echo $document['language'];?></td>
			<td><?php echo $document['priority'];?></td>
			<td><?php echo $document['revision_id'];?></td>
			<td><?php echo $document['stats_coverage'];?></td>
			<td><?php echo $document['document_fixture_id'];?></td>
			<td><?php echo $document['source_id'];?></td>
			<td><?php echo $document['db_loading_date_time'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'documents', 'action'=>'view', $document['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'documents', 'action'=>'edit', $document['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'documents', 'action'=>'delete', $document['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Document', true), array('controller'=> 'documents', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
