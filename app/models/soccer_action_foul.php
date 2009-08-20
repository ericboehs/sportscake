<?php
class SoccerActionFoul extends AppModel {

	var $name = 'SoccerActionFoul';
	var $validate = array(
		'soccer_event_state_id' => array('numeric'),
		'recipient_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'SoccerEventState' => array(
			'className' => 'SoccerEventState',
			'foreignKey' => 'soccer_event_state_id',
		),
		'Fouler' => array(
            'className' => 'Person',
            'foreignKey' => 'fouler_id',
        ),
        'Recipient' => array(
            'className' => 'Person',
            'foreignKey' => 'recipient_id',
        )
		
	);
}
?>