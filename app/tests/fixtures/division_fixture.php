<?php 
/* SVN FILE: $Id$ */
/* Division Fixture generated on: 2009-10-09 07:13:35 : 1255072415*/

class DivisionFixture extends CakeTestFixture {
	var $name = 'Division';
	var $table = 'divisions';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'division_key' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'conference_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'active' => array('type'=>'boolean', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'division_key'  => 'Lorem ipsum dolor sit amet',
		'conference_id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'active'  => 1
	));
}
?>