<?php
class IceHockeyActionParticipant extends AppModel {

	var $name = 'IceHockeyActionParticipant';
	var $validate = array(
		'ice_hockey_action_play_id' => array('numeric'),
		'person_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'IceHockeyActionPlay' => array(
			'className' => 'IceHockeyActionPlay',
			'foreignKey' => 'ice_hockey_action_play_id',
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