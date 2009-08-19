<?php
class SubPeriod extends AppModel {

	var $name = 'SubPeriod';
	var $validate = array(
		'period_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Period' => array(
			'className' => 'Period',
			'foreignKey' => 'period_id',
		)
	);

	var $hasMany = array(
		'TennisActionPoint' => array(
			'className' => 'TennisActionPoint',
			'foreignKey' => 'sub_period_id',
			'dependent' => false
		)
	);
}
?>