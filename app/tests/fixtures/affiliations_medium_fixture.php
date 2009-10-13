<?php 
/* SVN FILE: $Id$ */
/* AffiliationsMedium Fixture generated on: 2009-08-20 15:08:10 : 1250798890*/

class AffiliationsMediumFixture extends CakeTestFixture {
	var $name = 'AffiliationsMedium';
	var $fields = array(
		'affiliation_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'media_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_aff_med_med_id__med_id' => array('column' => 'media_id', 'unique' => 0), 'FK_aff_med_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0))
	);
	var $records = array(array(
		'affiliation_id'  => 1,
		'media_id'  => 1
	));
}
?>