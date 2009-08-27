<?php
class TennisEventStatesController extends AppController {

	var $name = 'TennisEventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TennisEventState->recursive = 0;
		$this->set('tennisEventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TennisEventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tennisEventState', $this->TennisEventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TennisEventState->create();
			if ($this->TennisEventState->save($this->data)) {
				$this->Session->setFlash(__('The TennisEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisEventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->TennisEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TennisEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TennisEventState->save($this->data)) {
				$this->Session->setFlash(__('The TennisEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisEventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TennisEventState->read(null, $id);
		}
		$events = $this->TennisEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TennisEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TennisEventState->del($id)) {
			$this->Session->setFlash(__('TennisEventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>