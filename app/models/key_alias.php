<?php
class KeyAlias extends AppModel {

	var $name = 'KeyAlias';
	var $validate = array(
		'key_id' => array('numeric'),
		'key_root_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'KeyRoot' => array(
			'className' => 'KeyRoot',
			'foreignKey' => 'key_root_id',
		)
	);
}
?>