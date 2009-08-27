<?php 
/* SVN FILE: $Id$ */
/* WeatherConditionsController Test cases generated on: 2009-08-20 15:08:30 : 1250799270*/
App::import('Controller', 'WeatherConditions');

class TestWeatherConditions extends WeatherConditionsController {
	var $autoRender = false;
}

class WeatherConditionsControllerTest extends CakeTestCase {
	var $WeatherConditions = null;

	function startTest() {
		$this->WeatherConditions = new TestWeatherConditions();
		$this->WeatherConditions->constructClasses();
	}

	function testWeatherConditionsControllerInstance() {
		$this->assertTrue(is_a($this->WeatherConditions, 'WeatherConditionsController'));
	}

	function endTest() {
		unset($this->WeatherConditions);
	}
}
?>