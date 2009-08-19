<?php
class DocumentPackage extends AppModel {

	var $name = 'DocumentPackage';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'DocumentPackageEntry' => array(
			'className' => 'DocumentPackageEntry',
			'foreignKey' => 'document_package_id',
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