<?php
class Division extends AppModel {

	var $name = 'Division';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Conference' => array(
			'className' => 'Conference',
			'foreignKey' => 'conference_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>