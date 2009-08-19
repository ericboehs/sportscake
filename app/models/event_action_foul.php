<?php
class EventActionFoul extends AppModel {

	var $name = 'EventActionFoul';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'EventState' => array(
			'className' => 'EventState',
			'foreignKey' => 'event_state_id',
		)
	);
}
?>