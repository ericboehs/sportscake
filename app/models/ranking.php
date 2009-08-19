<?php
class Ranking extends AppModel {

	var $name = 'Ranking';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'DocumentFixture' => array(
			'className' => 'DocumentFixture',
			'foreignKey' => 'document_fixture_id',
		),
		'Participant' => array(
			'className' => 'Participant',
			'foreignKey' => 'participant_id',
		),
		'DateCoverage' => array(
			'className' => 'DateCoverage',
			'foreignKey' => 'date_coverage_id',
		)
	);
}
?>