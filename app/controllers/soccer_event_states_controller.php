<?php
class SoccerEventStatesController extends AppController {

	var $name = 'SoccerEventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerEventState->recursive = 0;
		$this->set('soccerEventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerEventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerEventState', $this->SoccerEventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerEventState->create();
			if ($this->SoccerEventState->save($this->data)) {
				$this->Session->setFlash(__('The SoccerEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerEventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->SoccerEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerEventState->save($this->data)) {
				$this->Session->setFlash(__('The SoccerEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerEventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerEventState->read(null, $id);
		}
		$events = $this->SoccerEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerEventState->del($id)) {
			$this->Session->setFlash(__('SoccerEventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>