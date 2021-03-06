<?php
class OutcomeTotal extends AppModel {

	var $name = 'OutcomeTotal';
	var $validate = array(
		'standing_subgroup_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'StandingSubgroup' => array(
			'className' => 'StandingSubgroup',
			'foreignKey' => 'standing_subgroup_id',
		),
		'OutcomeHolder' => array(
			'className' => 'Team',
			'foreignKey' => 'outcome_holder_id',
		)
	);
}
?>