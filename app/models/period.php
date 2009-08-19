<?php
class Period extends AppModel {

	var $name = 'Period';
	var $validate = array(
		'participant_event_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'ParticipantEvent' => array(
			'className' => 'ParticipantEvent',
			'foreignKey' => 'participant_event_id',
		)
	);

    var $hasMany = array(
	   'SubPeriod' => array(
            'className' => 'Period',
            'foreignKey' => 'period_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Sub' => array(
			'className' => 'Sub',
			'joinTable' => 'sub_periods',
			'foreignKey' => 'period_id',
			'associationForeignKey' => 'sub_id',
			'unique' => true
		)
	);
}
?>