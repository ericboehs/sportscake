<?php 
/* SVN FILE: $Id$ */
/* AffiliationsEvent Fixture generated on: 2009-08-20 15:08:07 : 1250798887*/

class AffiliationsEventFixture extends CakeTestFixture {
	var $name = 'AffiliationsEvent';
	var $fields = array(
		'affiliation_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'event_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('FK_aff_eve_aff_id__aff_id' => array('column' => 'affiliation_id', 'unique' => 0), 'FK_aff_eve_eve_id__eve_id' => array('column' => 'event_id', 'unique' => 0))
	);
	var $records = array(array(
		'affiliation_id'  => 1,
		'event_id'  => 1
	));
}
?>