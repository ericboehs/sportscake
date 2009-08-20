<?php
class Record extends AppModel {

	var $name = 'Record';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Participant' => array(
			'className' => 'Person',
			'foreignKey' => 'participant_id',
		),
/*		'DateCoverage' => array(
			'className' => 'DateCoverage',
			'foreignKey' => 'date_coverage_id',
		)
*/
	);
}
?>