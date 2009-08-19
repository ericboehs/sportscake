<?php
class BaseballActionContactDetail extends AppModel {

	var $name = 'BaseballActionContactDetail';
	var $validate = array(
		'baseball_action_pitch_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'BaseballActionPitch' => array(
			'className' => 'BaseballActionPitch',
			'foreignKey' => 'baseball_action_pitch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>