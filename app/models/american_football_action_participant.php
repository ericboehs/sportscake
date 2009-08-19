<?php
class AmericanFootballActionParticipant extends AppModel {

	var $name = 'AmericanFootballActionParticipant';
	var $validate = array(
		'american_football_action_play_id' => array('numeric'),
		'person_id' => array('numeric'),
		'participant_role' => array('notempty')
	);
	var $belongsTo = array(
		'AmericanFootballActionPlay' => array(
			'className' => 'AmericanFootballActionPlay',
			'foreignKey' => 'american_football_action_play_id',
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
		)
	);
}
?>