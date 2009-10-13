<?php 
/* SVN FILE: $Id$ */
/* PersonsMedium Fixture generated on: 2009-08-20 15:08:02 : 1250799182*/

class PersonsMediumFixture extends CakeTestFixture {
	var $name = 'PersonsMedium';
	var $fields = array(
		'person_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_per_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_per_med_per_id__per_id' => array('column' => 'person_id', 'unique' => 0))
	);
	var $records = array(array(
		'person_id'  => 1,
		'media_id'  => 1
	));
}
?>