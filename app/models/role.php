<?php
class Role extends AppModel {

	var $name = 'Role';
	var $validate = array(
		'role_key' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'PersonEventMetadatum' => array(
			'className' => 'PersonEventMetadatum',
			'foreignKey' => 'role_id',
			'dependent' => false
		),
		'PersonPhase' => array(
			'className' => 'PersonPhase',
			'foreignKey' => 'role_id',
			'dependent' => false
		),
		'TeamPhase' => array(
			'className' => 'TeamPhase',
			'foreignKey' => 'role_id',
			'dependent' => false
		)
	);
}
?>