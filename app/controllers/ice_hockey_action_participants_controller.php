<?php
class IceHockeyActionParticipantsController extends AppController {

	var $name = 'IceHockeyActionParticipants';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IceHockeyActionParticipant->recursive = 0;
		$this->set('iceHockeyActionParticipants', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IceHockeyActionParticipant.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('iceHockeyActionParticipant', $this->IceHockeyActionParticipant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IceHockeyActionParticipant->create();
			if ($this->IceHockeyActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyActionParticipant could not be saved. Please, try again.', true));
			}
		}
		$iceHockeyActionPlays = $this->IceHockeyActionParticipant->IceHockeyActionPlay->find('list');
		$people = $this->IceHockeyActionParticipant->Person->find('list');
		$this->set(compact('iceHockeyActionPlays', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IceHockeyActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IceHockeyActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyActionParticipant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IceHockeyActionParticipant->read(null, $id);
		}
		$iceHockeyActionPlays = $this->IceHockeyActionParticipant->IceHockeyActionPlay->find('list');
		$people = $this->IceHockeyActionParticipant->Person->find('list');
		$this->set(compact('iceHockeyActionPlays','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IceHockeyActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IceHockeyActionParticipant->del($id)) {
			$this->Session->setFlash(__('IceHockeyActionParticipant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>