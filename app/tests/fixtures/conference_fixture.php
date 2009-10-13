<?php 
/* SVN FILE: $Id$ */
/* Conference Fixture generated on: 2009-10-13 20:03:44 : 1255464224*/

class ConferenceFixture extends CakeTestFixture {
	var $name = 'Conference';
	var $table = 'conferences';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'conference_key' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'league_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'shortname' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'conference_key'  => 'Lorem ipsum dolor sit amet',
		'league_id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'shortname'  => 'Lorem ipsum dolor sit amet'
	));
}
?>