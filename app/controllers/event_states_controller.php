<?php
class EventStatesController extends AppController {

	var $name = 'EventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventState->recursive = 0;
		$this->set('eventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventState', $this->EventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventState->create();
			if ($this->EventState->save($this->data)) {
				$this->Session->setFlash(__('The EventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventState->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventState->save($this->data)) {
				$this->Session->setFlash(__('The EventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventState->read(null, $id);
		}
		$events = $this->EventState->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventState->del($id)) {
			$this->Session->setFlash(__('EventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>