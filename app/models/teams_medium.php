<?php
class TeamsMedium extends AppModel {

	var $name = 'TeamsMedium';
	var $validate = array(
		'team_id' => array('numeric'),
		'media_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
		),
		'Media' => array(
			'className' => 'Media',
			'foreignKey' => 'media_id',
		)
	);
}
?>