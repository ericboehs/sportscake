<div class="people form">
<?php echo $form->create('Person');?>
	<fieldset>
 		<legend><?php __('Edit Person');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('person_key');
		echo $form->input('publisher_id');
		echo $form->input('gender');
		echo $form->input('birth_date');
		echo $form->input('death_date');
		echo $form->input('birth_location_id');
		echo $form->input('hometown_location_id');
		echo $form->input('residence_location_id');
		echo $form->input('death_location_id');
		echo $form->input('Document');
		echo $form->input('Media');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Person.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Person.id'))); ?></li>
		<li><?php echo $html->link(__('List People', true), array('action'=>'index'));?></li>
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
