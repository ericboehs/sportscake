<?php
class DocumentContent extends AppModel {

	var $name = 'DocumentContent';
	var $validate = array(
		'document_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
		)
	);
}
?>