<?php
class SoccerActionParticipant extends AppModel {

	var $name = 'SoccerActionParticipant';
	var $validate = array(
		'soccer_action_play_id' => array('numeric'),
		'person_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'SoccerActionPlay' => array(
			'className' => 'SoccerActionPlay',
			'foreignKey' => 'soccer_action_play_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>