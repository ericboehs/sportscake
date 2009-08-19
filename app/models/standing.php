<?php
class Standing extends AppModel {

	var $name = 'Standing';
	var $validate = array(
		'affiliation_id' => array('numeric'),
		'sub_season_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'affiliation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubSeason' => array(
			'className' => 'SubSeason',
			'foreignKey' => 'sub_season_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'StandingSubgroup' => array(
			'className' => 'StandingSubgroup',
			'foreignKey' => 'standing_id',
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