<?php
class Conference extends AppModel {

	var $name = 'Conference';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'League' => array(
			'className' => 'League',
			'foreignKey' => 'league_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Division' => array(
			'className' => 'Division',
			'foreignKey' => 'conference_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>