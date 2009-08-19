<?php
class KeyRoot extends AppModel {

	var $name = 'KeyRoot';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'KeyAlias' => array(
			'className' => 'KeyAlias',
			'foreignKey' => 'key_root_id',
			'dependent' => false
		)
	);
}
?>