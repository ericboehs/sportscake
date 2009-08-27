<?php 
/* SVN FILE: $Id$ */
/* AddressesController Test cases generated on: 2009-08-20 15:08:58 : 1250798878*/
App::import('Controller', 'Addresses');

class TestAddresses extends AddressesController {
	var $autoRender = false;
}

class AddressesControllerTest extends CakeTestCase {
	var $Addresses = null;

	function startTest() {
		$this->Addresses = new TestAddresses();
		$this->Addresses->constructClasses();
	}

	function testAddressesControllerInstance() {
		$this->assertTrue(is_a($this->Addresses, 'AddressesController'));
	}

	function endTest() {
		unset($this->Addresses);
	}
}
?>