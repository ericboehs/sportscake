<?php
class IceHockeyEventStatesController extends AppController {

	var $name = 'IceHockeyEventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IceHockeyEventState->recursive = 0;
		$this->set('iceHockeyEventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IceHockeyEventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('iceHockeyEventState', $this->IceHockeyEventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IceHockeyEventState->create();
			if ($this->IceHockeyEventState->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyEventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->IceHockeyEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IceHockeyEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IceHockeyEventState->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyEventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IceHockeyEventState->read(null, $id);
		}
		$events = $this->IceHockeyEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IceHockeyEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IceHockeyEventState->del($id)) {
			$this->Session->setFlash(__('IceHockeyEventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>