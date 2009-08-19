<?php
class WageringMoneyline extends AppModel {

	var $name = 'WageringMoneyline';
	var $validate = array(
		'bookmaker_id' => array('numeric'),
		'event_id' => array('numeric'),
		'team_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Bookmaker' => array(
			'className' => 'Bookmaker',
			'foreignKey' => 'bookmaker_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
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