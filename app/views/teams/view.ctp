<div class="teams view">
<h2><?php  __('Team');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $team['Team']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Team Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $team['Team']['team_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($team['Publisher']['id'], array('controller'=> 'publishers', 'action'=>'view', $team['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Home Site'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($team['HomeSite']['id'], array('controller'=> 'sites', 'action'=>'view', $team['HomeSite']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Team', true), array('action'=>'edit', $team['Team']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Team', true), array('action'=>'delete', $team['Team']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $team['Team']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller'=> 'publishers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller'=> 'publishers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sites', true), array('controller'=> 'sites', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Home Site', true), array('controller'=> 'sites', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Event States', true), array('controller'=> 'american_football_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Event State', true), array('controller'=> 'american_football_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Ice Hockey Action Plays', true), array('controller'=> 'ice_hockey_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ice Hockey Action Play', true), array('controller'=> 'ice_hockey_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Outcome Totals', true), array('controller'=> 'outcome_totals', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Outcome Total', true), array('controller'=> 'outcome_totals', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Person Event Metadata', true), array('controller'=> 'person_event_metadata', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Event Metadatum', true), array('controller'=> 'person_event_metadata', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Team Phases', true), array('controller'=> 'team_phases', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add')); ?> </li>
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
		<li><?php echo $html->link(__('List American Football Special Teams Stats', true), array('controller'=> 'american_football_special_teams_stats', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New An Football Special Teams Stat', true), array('controller'=> 'american_football_special_teams_stats', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Documents', true), array('controller'=> 'documents', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Document', true), array('controller'=> 'documents', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related American Football Event States');?></h3>
	<?php if (!empty($team['AmericanFootballEventState'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Current State'); ?></th>
		<th><?php __('Sequence Number'); ?></th>
		<th><?php __('Period Value'); ?></th>
		<th><?php __('Period Time Elapsed'); ?></th>
		<th><?php __('Period Time Remaining'); ?></th>
		<th><?php __('Clock State'); ?></th>
		<th><?php __('Down'); ?></th>
		<th><?php __('Team In Possession Id'); ?></th>
		<th><?php __('Distance For 1st Down'); ?></th>
		<th><?php __('Field Side'); ?></th>
		<th><?php __('Field Line'); ?></th>
		<th><?php __('Context'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['AmericanFootballEventState'] as $americanFootballEventState):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $americanFootballEventState['id'];?></td>
			<td><?php echo $americanFootballEventState['event_id'];?></td>
			<td><?php echo $americanFootballEventState['current_state'];?></td>
			<td><?php echo $americanFootballEventState['sequence_number'];?></td>
			<td><?php echo $americanFootballEventState['period_value'];?></td>
			<td><?php echo $americanFootballEventState['period_time_elapsed'];?></td>
			<td><?php echo $americanFootballEventState['period_time_remaining'];?></td>
			<td><?php echo $americanFootballEventState['clock_state'];?></td>
			<td><?php echo $americanFootballEventState['down'];?></td>
			<td><?php echo $americanFootballEventState['team_in_possession_id'];?></td>
			<td><?php echo $americanFootballEventState['distance_for_1st_down'];?></td>
			<td><?php echo $americanFootballEventState['field_side'];?></td>
			<td><?php echo $americanFootballEventState['field_line'];?></td>
			<td><?php echo $americanFootballEventState['context'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'american_football_event_states', 'action'=>'view', $americanFootballEventState['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'american_football_event_states', 'action'=>'edit', $americanFootballEventState['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'american_football_event_states', 'action'=>'delete', $americanFootballEventState['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballEventState['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New American Football Event State', true), array('controller'=> 'american_football_event_states', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Ice Hockey Action Plays');?></h3>
	<?php if (!empty($team['IceHockeyActionPlay'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ice Hockey Event State Id'); ?></th>
		<th><?php __('Play Key'); ?></th>
		<th><?php __('Play Type'); ?></th>
		<th><?php __('Score Attempt Type'); ?></th>
		<th><?php __('Play Result'); ?></th>
		<th><?php __('Penalty Type'); ?></th>
		<th><?php __('Penalty Length'); ?></th>
		<th><?php __('Penalty Code'); ?></th>
		<th><?php __('Recipient Type'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Strength'); ?></th>
		<th><?php __('Location X'); ?></th>
		<th><?php __('Location Y'); ?></th>
		<th><?php __('Location Zone'); ?></th>
		<th><?php __('Shootout Shot Order'); ?></th>
		<th><?php __('Goal Order'); ?></th>
		<th><?php __('Shot Type'); ?></th>
		<th><?php __('Shot Distance'); ?></th>
		<th><?php __('Goal Zone'); ?></th>
		<th><?php __('Empty Net'); ?></th>
		<th><?php __('Goal Awarded'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['IceHockeyActionPlay'] as $iceHockeyActionPlay):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $iceHockeyActionPlay['id'];?></td>
			<td><?php echo $iceHockeyActionPlay['ice_hockey_event_state_id'];?></td>
			<td><?php echo $iceHockeyActionPlay['play_key'];?></td>
			<td><?php echo $iceHockeyActionPlay['play_type'];?></td>
			<td><?php echo $iceHockeyActionPlay['score_attempt_type'];?></td>
			<td><?php echo $iceHockeyActionPlay['play_result'];?></td>
			<td><?php echo $iceHockeyActionPlay['penalty_type'];?></td>
			<td><?php echo $iceHockeyActionPlay['penalty_length'];?></td>
			<td><?php echo $iceHockeyActionPlay['penalty_code'];?></td>
			<td><?php echo $iceHockeyActionPlay['recipient_type'];?></td>
			<td><?php echo $iceHockeyActionPlay['team_id'];?></td>
			<td><?php echo $iceHockeyActionPlay['strength'];?></td>
			<td><?php echo $iceHockeyActionPlay['location_x'];?></td>
			<td><?php echo $iceHockeyActionPlay['location_y'];?></td>
			<td><?php echo $iceHockeyActionPlay['location_zone'];?></td>
			<td><?php echo $iceHockeyActionPlay['shootout_shot_order'];?></td>
			<td><?php echo $iceHockeyActionPlay['goal_order'];?></td>
			<td><?php echo $iceHockeyActionPlay['shot_type'];?></td>
			<td><?php echo $iceHockeyActionPlay['shot_distance'];?></td>
			<td><?php echo $iceHockeyActionPlay['goal_zone'];?></td>
			<td><?php echo $iceHockeyActionPlay['empty_net'];?></td>
			<td><?php echo $iceHockeyActionPlay['goal_awarded'];?></td>
			<td><?php echo $iceHockeyActionPlay['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'ice_hockey_action_plays', 'action'=>'view', $iceHockeyActionPlay['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'ice_hockey_action_plays', 'action'=>'edit', $iceHockeyActionPlay['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'ice_hockey_action_plays', 'action'=>'delete', $iceHockeyActionPlay['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyActionPlay['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Ice Hockey Action Play', true), array('controller'=> 'ice_hockey_action_plays', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Outcome Totals');?></h3>
	<?php if (!empty($team['OutcomeTotal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Standing Subgroup Id'); ?></th>
		<th><?php __('Outcome Holder Type'); ?></th>
		<th><?php __('Outcome Holder Id'); ?></th>
		<th><?php __('Rank'); ?></th>
		<th><?php __('Wins'); ?></th>
		<th><?php __('Losses'); ?></th>
		<th><?php __('Ties'); ?></th>
		<th><?php __('Undecideds'); ?></th>
		<th><?php __('Winning Percentage'); ?></th>
		<th><?php __('Points Scored For'); ?></th>
		<th><?php __('Points Scored Against'); ?></th>
		<th><?php __('Points Difference'); ?></th>
		<th><?php __('Standing Points'); ?></th>
		<th><?php __('Streak Type'); ?></th>
		<th><?php __('Streak Duration'); ?></th>
		<th><?php __('Streak Total'); ?></th>
		<th><?php __('Streak Start'); ?></th>
		<th><?php __('Streak End'); ?></th>
		<th><?php __('Events Played'); ?></th>
		<th><?php __('Games Back'); ?></th>
		<th><?php __('Result Effect'); ?></th>
		<th><?php __('Sets Against'); ?></th>
		<th><?php __('Sets For'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['OutcomeTotal'] as $outcomeTotal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $outcomeTotal['id'];?></td>
			<td><?php echo $outcomeTotal['standing_subgroup_id'];?></td>
			<td><?php echo $outcomeTotal['outcome_holder_type'];?></td>
			<td><?php echo $outcomeTotal['outcome_holder_id'];?></td>
			<td><?php echo $outcomeTotal['rank'];?></td>
			<td><?php echo $outcomeTotal['wins'];?></td>
			<td><?php echo $outcomeTotal['losses'];?></td>
			<td><?php echo $outcomeTotal['ties'];?></td>
			<td><?php echo $outcomeTotal['undecideds'];?></td>
			<td><?php echo $outcomeTotal['winning_percentage'];?></td>
			<td><?php echo $outcomeTotal['points_scored_for'];?></td>
			<td><?php echo $outcomeTotal['points_scored_against'];?></td>
			<td><?php echo $outcomeTotal['points_difference'];?></td>
			<td><?php echo $outcomeTotal['standing_points'];?></td>
			<td><?php echo $outcomeTotal['streak_type'];?></td>
			<td><?php echo $outcomeTotal['streak_duration'];?></td>
			<td><?php echo $outcomeTotal['streak_total'];?></td>
			<td><?php echo $outcomeTotal['streak_start'];?></td>
			<td><?php echo $outcomeTotal['streak_end'];?></td>
			<td><?php echo $outcomeTotal['events_played'];?></td>
			<td><?php echo $outcomeTotal['games_back'];?></td>
			<td><?php echo $outcomeTotal['result_effect'];?></td>
			<td><?php echo $outcomeTotal['sets_against'];?></td>
			<td><?php echo $outcomeTotal['sets_for'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'outcome_totals', 'action'=>'view', $outcomeTotal['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'outcome_totals', 'action'=>'edit', $outcomeTotal['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'outcome_totals', 'action'=>'delete', $outcomeTotal['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $outcomeTotal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Outcome Total', true), array('controller'=> 'outcome_totals', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Person Event Metadata');?></h3>
	<?php if (!empty($team['PersonEventMetadatum'])):?>
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
		foreach ($team['PersonEventMetadatum'] as $personEventMetadatum):
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
	<h3><?php __('Related Team Phases');?></h3>
	<?php if (!empty($team['TeamPhase'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Team Id'); ?></th>
		<th><?php __('Start Season Id'); ?></th>
		<th><?php __('End Season Id'); ?></th>
		<th><?php __('Affiliation Id'); ?></th>
		<th><?php __('Start Date Time'); ?></th>
		<th><?php __('End Date Time'); ?></th>
		<th><?php __('Phase Status'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['TeamPhase'] as $teamPhase):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teamPhase['id'];?></td>
			<td><?php echo $teamPhase['team_id'];?></td>
			<td><?php echo $teamPhase['start_season_id'];?></td>
			<td><?php echo $teamPhase['end_season_id'];?></td>
			<td><?php echo $teamPhase['affiliation_id'];?></td>
			<td><?php echo $teamPhase['start_date_time'];?></td>
			<td><?php echo $teamPhase['end_date_time'];?></td>
			<td><?php echo $teamPhase['phase_status'];?></td>
			<td><?php echo $teamPhase['role_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'team_phases', 'action'=>'view', $teamPhase['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'team_phases', 'action'=>'edit', $teamPhase['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'team_phases', 'action'=>'delete', $teamPhase['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teamPhase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Team Phase', true), array('controller'=> 'team_phases', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wagering Moneylines');?></h3>
	<?php if (!empty($team['WageringMoneyline'])):?>
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
		foreach ($team['WageringMoneyline'] as $wageringMoneyline):
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
	<?php if (!empty($team['WageringOddsLine'])):?>
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
		foreach ($team['WageringOddsLine'] as $wageringOddsLine):
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
	<?php if (!empty($team['WageringRunline'])):?>
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
		foreach ($team['WageringRunline'] as $wageringRunline):
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
	<?php if (!empty($team['WageringStraightSpreadLine'])):?>
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
		foreach ($team['WageringStraightSpreadLine'] as $wageringStraightSpreadLine):
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
	<?php if (!empty($team['WageringTotalScoreLine'])):?>
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
		foreach ($team['WageringTotalScoreLine'] as $wageringTotalScoreLine):
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
	<h3><?php __('Related American Football Special Teams Stats');?></h3>
	<?php if (!empty($team['AnFootballSpecialTeamsStat'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Returns Punt Total'); ?></th>
		<th><?php __('Returns Punt Yards'); ?></th>
		<th><?php __('Returns Punt Average'); ?></th>
		<th><?php __('Returns Punt Longest'); ?></th>
		<th><?php __('Returns Punt Touchdown'); ?></th>
		<th><?php __('Returns Kickoff Total'); ?></th>
		<th><?php __('Returns Kickoff Yards'); ?></th>
		<th><?php __('Returns Kickoff Average'); ?></th>
		<th><?php __('Returns Kickoff Longest'); ?></th>
		<th><?php __('Returns Kickoff Touchdown'); ?></th>
		<th><?php __('Returns Total'); ?></th>
		<th><?php __('Returns Yards'); ?></th>
		<th><?php __('Punts Total'); ?></th>
		<th><?php __('Punts Yards Gross'); ?></th>
		<th><?php __('Punts Yards Net'); ?></th>
		<th><?php __('Punts Longest'); ?></th>
		<th><?php __('Punts Inside 20'); ?></th>
		<th><?php __('Punts Inside 20 Percentage'); ?></th>
		<th><?php __('Punts Average'); ?></th>
		<th><?php __('Punts Blocked'); ?></th>
		<th><?php __('Touchbacks Total'); ?></th>
		<th><?php __('Touchbacks Total Percentage'); ?></th>
		<th><?php __('Touchbacks Kickoffs'); ?></th>
		<th><?php __('Touchbacks Kickoffs Percentage'); ?></th>
		<th><?php __('Touchbacks Punts'); ?></th>
		<th><?php __('Touchbacks Punts Percentage'); ?></th>
		<th><?php __('Touchbacks Interceptions'); ?></th>
		<th><?php __('Touchbacks Interceptions Percentage'); ?></th>
		<th><?php __('Fair Catches'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['AnFootballSpecialTeamsStat'] as $anFootballSpecialTeamsStat):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $anFootballSpecialTeamsStat['id'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_punt_total'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_punt_yards'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_punt_average'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_punt_longest'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_punt_touchdown'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_kickoff_total'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_kickoff_yards'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_kickoff_average'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_kickoff_longest'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_kickoff_touchdown'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_total'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['returns_yards'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_total'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_yards_gross'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_yards_net'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_longest'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_inside_20'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_inside_20_percentage'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_average'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['punts_blocked'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_total'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_total_percentage'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_kickoffs'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_kickoffs_percentage'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_punts'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_punts_percentage'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_interceptions'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['touchbacks_interceptions_percentage'];?></td>
			<td><?php echo $anFootballSpecialTeamsStat['fair_catches'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'american_football_special_teams_stats', 'action'=>'view', $anFootballSpecialTeamsStat['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'american_football_special_teams_stats', 'action'=>'edit', $anFootballSpecialTeamsStat['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'american_football_special_teams_stats', 'action'=>'delete', $anFootballSpecialTeamsStat['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $anFootballSpecialTeamsStat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New An Football Special Teams Stat', true), array('controller'=> 'american_football_special_teams_stats', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Documents');?></h3>
	<?php if (!empty($team['Document'])):?>
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
		foreach ($team['Document'] as $document):
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
<div class="related">
	<h3><?php __('Related Media');?></h3>
	<?php if (!empty($team['Media'])):?>
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
		foreach ($team['Media'] as $media):
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
