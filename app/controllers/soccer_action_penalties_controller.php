<?php
class SoccerActionPenaltiesController extends AppController {

	var $name = 'SoccerActionPenalties';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerActionPenalty->recursive = 0;
		$this->set('soccerActionPenalties', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerActionPenalty.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerActionPenalty', $this->SoccerActionPenalty->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerActionPenalty->create();
			if ($this->SoccerActionPenalty->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionPenalty has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionPenalty could not be saved. Please, try again.', true));
			}
		}
		$soccerEventStates = $this->SoccerActionPenalty->SoccerEventState->find('list');
		$recipients = $this->SoccerActionPenalty->Recipient->find('list');
		$this->set(compact('soccerEventStates', 'recipients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerActionPenalty', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerActionPenalty->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionPenalty has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionPenalty could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerActionPenalty->read(null, $id);
		}
		$soccerEventStates = $this->SoccerActionPenalty->SoccerEventState->find('list');
		$recipients = $this->SoccerActionPenalty->Recipient->find('list');
		$this->set(compact('soccerEventStates','recipients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerActionPenalty', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerActionPenalty->del($id)) {
			$this->Session->setFlash(__('SoccerActionPenalty deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>