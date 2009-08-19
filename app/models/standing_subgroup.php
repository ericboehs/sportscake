<?php
class StandingSubgroup extends AppModel {

	var $name = 'StandingSubgroup';
	var $validate = array(
		'standing_id' => array('numeric'),
		'affiliation_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Standing' => array(
			'className' => 'Standing',
			'foreignKey' => 'standing_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'affiliation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CompetitionScope' => array(
			'className' => 'CompetitionScope',
			'foreignKey' => 'competition_scope_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'OutcomeTotal' => array(
			'className' => 'OutcomeTotal',
			'foreignKey' => 'standing_subgroup_id',
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