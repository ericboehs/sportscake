<?php 
/* SVN FILE: $Id$ */
/* Sport Fixture generated on: 2009-10-09 07:05:06 : 1255071906*/

class SportFixture extends CakeTestFixture {
	var $name = 'Sport';
	var $table = 'sports';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sport_key' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'sport_key'  => 'Lorem ipsum dolor sit amet',
		'name'  => 'Lorem ipsum dolor sit amet'
	));
}
?>