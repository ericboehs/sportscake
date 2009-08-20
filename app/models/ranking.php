<?php
class Ranking extends AppModel {

	var $name = 'Ranking';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'DocumentFixture' => array( //NOTE: There are no foriegn keys setup in the DB for this
			'className' => 'DocumentFixture',
			'foreignKey' => 'document_fixture_id',
		),
		'Participant' => array( //NOTE: There are no foriegn keys setup in the DB for this
			'className' => 'Participant',
			'foreignKey' => 'participant_id',
		),
		'DateCoverage' => array( //NOTE: There are no foriegn keys setup in the DB for this
			'className' => 'DateCoverage',
			'foreignKey' => 'date_coverage_id',
		)
	);
}
?>