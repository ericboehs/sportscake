<?php
class TeamsDocument extends AppModel {

	var $name = 'TeamsDocument';
	var $validate = array(
		'team_id' => array('numeric'),
		'document_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
		)
	);
}
?>