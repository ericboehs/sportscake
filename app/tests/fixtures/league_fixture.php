<?php 
/* SVN FILE: $Id$ */
/* League Fixture generated on: 2009-10-09 07:09:50 : 1255072190*/

class LeagueFixture extends CakeTestFixture {
	var $name = 'League';
	var $table = 'leagues';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'league_key' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'sport_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'nickname' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'league_key'  => 'Lorem ipsum dolor sit amet',
		'sport_id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'nickname'  => 'Lorem ipsum dolor sit amet'
	));
}
?>