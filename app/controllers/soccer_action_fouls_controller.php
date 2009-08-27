<?php
class SoccerActionFoulsController extends AppController {

	var $name = 'SoccerActionFouls';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerActionFoul->recursive = 0;
		$this->set('soccerActionFouls', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerActionFoul.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerActionFoul', $this->SoccerActionFoul->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerActionFoul->create();
			if ($this->SoccerActionFoul->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionFoul has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionFoul could not be saved. Please, try again.', true));
			}
		}
		$soccerEventStates = $this->SoccerActionFoul->SoccerEventState->find('list');
		$foulers = $this->SoccerActionFoul->Fouler->find('list');
		$recipients = $this->SoccerActionFoul->Recipient->find('list');
		$this->set(compact('soccerEventStates', 'foulers', 'recipients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerActionFoul', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerActionFoul->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionFoul has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionFoul could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerActionFoul->read(null, $id);
		}
		$soccerEventStates = $this->SoccerActionFoul->SoccerEventState->find('list');
		$foulers = $this->SoccerActionFoul->Fouler->find('list');
		$recipients = $this->SoccerActionFoul->Recipient->find('list');
		$this->set(compact('soccerEventStates','foulers','recipients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerActionFoul', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerActionFoul->del($id)) {
			$this->Session->setFlash(__('SoccerActionFoul deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>