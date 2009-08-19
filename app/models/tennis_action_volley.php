<?php
class TennisActionVolley extends AppModel {

	var $name = 'TennisActionVolley';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'TennisActionPoints' => array(
			'className' => 'TennisActionPoints',
			'foreignKey' => 'tennis_action_points_id',
		)
	);
}
?>