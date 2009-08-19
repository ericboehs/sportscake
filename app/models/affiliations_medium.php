<?php
class AffiliationsMedium extends AppModel {

	var $name = 'AffiliationsMedium';
	var $validate = array(
		'affiliation_id' => array('numeric'),
		'media_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Affiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'affiliation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'media_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>