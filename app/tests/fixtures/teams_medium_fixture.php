<?php 
/* SVN FILE: $Id$ */
/* TeamsMedium Fixture generated on: 2009-08-20 15:08:56 : 1250799236*/

class TeamsMediumFixture extends CakeTestFixture {
	var $name = 'TeamsMedium';
	var $fields = array(
		'team_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_tea_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_tea_med_tea_id__tea_id' => array('column' => 'team_id', 'unique' => 0))
	);
	var $records = array(array(
		'team_id'  => 1,
		'media_id'  => 1
	));
}
?>