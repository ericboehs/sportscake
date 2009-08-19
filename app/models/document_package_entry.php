<?php
class DocumentPackageEntry extends AppModel {

	var $name = 'DocumentPackageEntry';
	var $useTable = 'document_package_entry';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'DocumentPackage' => array(
			'className' => 'DocumentPackage',
			'foreignKey' => 'document_package_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>