<?php
class ParticipantsEventsController extends AppController {

	var $name = 'ParticipantsEvents';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ParticipantsEvent->recursive = 0;
		$this->set('participantsEvents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ParticipantsEvent.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('participantsEvent', $this->ParticipantsEvent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ParticipantsEvent->create();
			if ($this->ParticipantsEvent->save($this->data)) {
				$this->Session->setFlash(__('The ParticipantsEvent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ParticipantsEvent could not be saved. Please, try again.', true));
			}
		}
		$events = $this->ParticipantsEvent->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ParticipantsEvent', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ParticipantsEvent->save($this->data)) {
				$this->Session->setFlash(__('The ParticipantsEvent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ParticipantsEvent could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ParticipantsEvent->read(null, $id);
		}
		$events = $this->ParticipantsEvent->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ParticipantsEvent', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ParticipantsEvent->del($id)) {
			$this->Session->setFlash(__('ParticipantsEvent deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>