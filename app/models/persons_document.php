<?php
class PersonsDocument extends AppModel {

	var $name = 'PersonsDocument';
	var $validate = array(
		'person_id' => array('numeric'),
		'document_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
		)
	);
}
?>