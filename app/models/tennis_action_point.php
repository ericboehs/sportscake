<?php
class TennisActionPoint extends AppModel {

	var $name = 'TennisActionPoint';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'SubPeriod' => array(
			'className' => 'SubPeriod',
			'foreignKey' => 'sub_period_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>