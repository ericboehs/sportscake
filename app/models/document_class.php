<?php
class DocumentClass extends AppModel {

	var $name = 'DocumentClass';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'DocumentFixture' => array(
			'className' => 'DocumentFixture',
			'foreignKey' => 'document_class_id',
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