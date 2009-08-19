<?php
class CoreStat extends AppModel {

	var $name = 'CoreStat';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
		)
	);
}
?>