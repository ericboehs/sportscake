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
		),
		'AncestorAffiliation' => array(
			'className' => 'Affiliation',
			'foreignKey' => 'ancestor_affiliation_id',
		),
		'StartSeason' => array(
			'className' => 'Season',
			'foreignKey' => 'start_season_id',
		),
		'EndSeason' => array(
			'className' => 'Season',
			'foreignKey' => 'end_season_id',
		)
	);
}
?>