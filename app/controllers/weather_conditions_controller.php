<?php
class WeatherConditionsController extends AppController {

	var $name = 'WeatherConditions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->WeatherCondition->recursive = 0;
		$this->set('weatherConditions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WeatherCondition.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('weatherCondition', $this->WeatherCondition->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WeatherCondition->create();
			if ($this->WeatherCondition->save($this->data)) {
				$this->Session->setFlash(__('The WeatherCondition has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WeatherCondition could not be saved. Please, try again.', true));
			}
		}
		$events = $this->WeatherCondition->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WeatherCondition', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WeatherCondition->save($this->data)) {
				$this->Session->setFlash(__('The WeatherCondition has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WeatherCondition could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WeatherCondition->read(null, $id);
		}
		$events = $this->WeatherCondition->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WeatherCondition', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WeatherCondition->del($id)) {
			$this->Session->setFlash(__('WeatherCondition deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>