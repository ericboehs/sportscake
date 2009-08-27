<?php 
/* SVN FILE: $Id$ */
/* EventsMedium Fixture generated on: 2009-08-20 15:08:31 : 1250799091*/

class EventsMediumFixture extends CakeTestFixture {
	var $name = 'EventsMedium';
	var $fields = array(
		'event_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_eve_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_eve_med_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $records = array(array(
		'event_id'  => 1,
		'media_id'  => 1
	));
}
?>