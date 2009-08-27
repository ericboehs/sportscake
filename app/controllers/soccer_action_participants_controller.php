<?php
class SoccerActionParticipantsController extends AppController {

	var $name = 'SoccerActionParticipants';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerActionParticipant->recursive = 0;
		$this->set('soccerActionParticipants', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerActionParticipant.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerActionParticipant', $this->SoccerActionParticipant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerActionParticipant->create();
			if ($this->SoccerActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionParticipant could not be saved. Please, try again.', true));
			}
		}
		$soccerActionPlays = $this->SoccerActionParticipant->SoccerActionPlay->find('list');
		$people = $this->SoccerActionParticipant->Person->find('list');
		$this->set(compact('soccerActionPlays', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionParticipant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerActionParticipant->read(null, $id);
		}
		$soccerActionPlays = $this->SoccerActionParticipant->SoccerActionPlay->find('list');
		$people = $this->SoccerActionParticipant->Person->find('list');
		$this->set(compact('soccerActionPlays','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerActionParticipant->del($id)) {
			$this->Session->setFlash(__('SoccerActionParticipant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>