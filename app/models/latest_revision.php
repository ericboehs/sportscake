<?php
class LatestRevision extends AppModel {

	var $name = 'LatestRevision';
	var $validate = array(
		'revision_id' => array('notempty'),
		'latest_document_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Revision' => array(
			'className' => 'Revision',
			'foreignKey' => 'revision_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LatestDocument' => array(
			'className' => 'LatestDocument',
			'foreignKey' => 'latest_document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>