<?php
class AffiliationPhase extends AppModel {

	var $name = 'AffiliationPhase';
	var $validate = array(
		'affiliation_id' => array('numeric')
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
		'AncestorAffiliation' => array(
			'className' => 'Affiliation',
			//FIXME: the className here was AncestorAffiliation
			'foreignKey' => 'ancestor_affiliation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StartSeason' => array(
			'className' => 'StartSeason',
			'foreignKey' => 'start_season_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EndSeason' => array(
			'className' => 'EndSeason',
			'foreignKey' => 'end_season_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>