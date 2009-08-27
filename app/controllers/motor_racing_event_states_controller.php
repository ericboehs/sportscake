<?php
class MotorRacingEventStatesController extends AppController {

	var $name = 'MotorRacingEventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MotorRacingEventState->recursive = 0;
		$this->set('motorRacingEventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MotorRacingEventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('motorRacingEventState', $this->MotorRacingEventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MotorRacingEventState->create();
			if ($this->MotorRacingEventState->save($this->data)) {
				$this->Session->setFlash(__('The MotorRacingEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MotorRacingEventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->MotorRacingEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MotorRacingEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MotorRacingEventState->save($this->data)) {
				$this->Session->setFlash(__('The MotorRacingEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MotorRacingEventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MotorRacingEventState->read(null, $id);
		}
		$events = $this->MotorRacingEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MotorRacingEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MotorRacingEventState->del($id)) {
			$this->Session->setFlash(__('MotorRacingEventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>