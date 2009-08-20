<?php
class Ranking extends AppModel {

	var $name = 'Ranking';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		// 'DocumentFixture' => array( //NOTE: There are no foriegn keys setup in the DB for this
		// 	'className' => 'DocumentFixture',
		// 	'foreignKey' => 'document_fixture_id',
		// ),
		// 'Participant' => array(
		// 	'className' => 'Person',
		// 	'foreignKey' => 'participant_id',
		// ),
/*	'DateCoverage' => array(
			'className' => 'DateCoverage',
			'foreignKey' => 'date_coverage_id',
		)
*/
	);
}
?>