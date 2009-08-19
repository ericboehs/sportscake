<?php
class Bookmaker extends AppModel {

	var $name = 'Bookmaker';
	var $validate = array(
		'publisher_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
		)
	);

	var $hasMany = array(
		'WageringMoneyline' => array(
			'className' => 'WageringMoneyline',
			'foreignKey' => 'bookmaker_id',
			'dependent' => false
		),
		'WageringOddsLine' => array(
			'className' => 'WageringOddsLine',
			'foreignKey' => 'bookmaker_id',
			'dependent' => false
		),
		'WageringRunline' => array(
			'className' => 'WageringRunline',
			'foreignKey' => 'bookmaker_id',
			'dependent' => false
		),
		'WageringStraightSpreadLine' => array(
			'className' => 'WageringStraightSpreadLine',
			'foreignKey' => 'bookmaker_id',
			'dependent' => false
		),
		'WageringTotalScoreLine' => array(
			'className' => 'WageringTotalScoreLine',
			'foreignKey' => 'bookmaker_id',
			'dependent' => false
		)
	);
}
?>