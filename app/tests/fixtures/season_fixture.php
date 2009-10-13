<?php 
/* SVN FILE: $Id$ */
/* Season Fixture generated on: 2009-10-09 07:06:25 : 1255071985*/

class SeasonFixture extends CakeTestFixture {
	var $name = 'Season';
	var $table = 'seasons';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'season_key' => array('type'=>'string', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'publisher_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'league_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'start_date_time' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'end_date_time' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_FK_sea_lea_id__aff_id' => array('column' => 'league_id', 'unique' => 0), 'IDX_FK_sea_pub_id__pub_id' => array('column' => 'publisher_id', 'unique' => 0), 'IDX_seasons_1' => array('column' => 'season_key', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'season_key'  => 'Lorem ipsum dolor sit amet',
		'name'  => 'Lorem ipsum dolor sit amet',
		'publisher_id'  => 1,
		'league_id'  => 1,
		'start_date_time'  => '2009-10-09 07:06:25',
		'end_date_time'  => '2009-10-09 07:06:25'
	));
}
?>