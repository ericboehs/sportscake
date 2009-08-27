<?php
class EventActionParticipantsController extends AppController {

	var $name = 'EventActionParticipants';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventActionParticipant->recursive = 0;
		$this->set('eventActionParticipants', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventActionParticipant.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventActionParticipant', $this->EventActionParticipant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventActionParticipant->create();
			if ($this->EventActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The EventActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionParticipant could not be saved. Please, try again.', true));
			}
		}
		$eventStates = $this->EventActionParticipant->EventState->find('list');
		$eventActionPlays = $this->EventActionParticipant->EventActionPlay->find('list');
		$people = $this->EventActionParticipant->Person->find('list');
		$this->set(compact('eventStates', 'eventActionPlays', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The EventActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionParticipant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventActionParticipant->read(null, $id);
		}
		$eventStates = $this->EventActionParticipant->EventState->find('list');
		$eventActionPlays = $this->EventActionParticipant->EventActionPlay->find('list');
		$people = $this->EventActionParticipant->Person->find('list');
		$this->set(compact('eventStates','eventActionPlays','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventActionParticipant->del($id)) {
			$this->Session->setFlash(__('EventActionParticipant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>