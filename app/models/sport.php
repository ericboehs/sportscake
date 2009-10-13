<?php
class Sport extends AppModel {

	var $name = 'Sport';
	var $validate = array(
		'sport_key' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'League' => array(
			'className' => 'League',
			'foreignKey' => 'sport_id',
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