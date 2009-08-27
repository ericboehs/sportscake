<?php
class SoccerActionSubstitutionsController extends AppController {

	var $name = 'SoccerActionSubstitutions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerActionSubstitution->recursive = 0;
		$this->set('soccerActionSubstitutions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerActionSubstitution.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerActionSubstitution', $this->SoccerActionSubstitution->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerActionSubstitution->create();
			if ($this->SoccerActionSubstitution->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionSubstitution has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionSubstitution could not be saved. Please, try again.', true));
			}
		}
		$soccerEventStates = $this->SoccerActionSubstitution->SoccerEventState->find('list');
		$personOriginals = $this->SoccerActionSubstitution->PersonOriginal->find('list');
		$personOriginalPositions = $this->SoccerActionSubstitution->PersonOriginalPosition->find('list');
		$personReplacings = $this->SoccerActionSubstitution->PersonReplacing->find('list');
		$personReplacingPositions = $this->SoccerActionSubstitution->PersonReplacingPosition->find('list');
		$this->set(compact('soccerEventStates', 'personOriginals', 'personOriginalPositions', 'personReplacings', 'personReplacingPositions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerActionSubstitution', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerActionSubstitution->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionSubstitution has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionSubstitution could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerActionSubstitution->read(null, $id);
		}
		$soccerEventStates = $this->SoccerActionSubstitution->SoccerEventState->find('list');
		$personOriginals = $this->SoccerActionSubstitution->PersonOriginal->find('list');
		$personOriginalPositions = $this->SoccerActionSubstitution->PersonOriginalPosition->find('list');
		$personReplacings = $this->SoccerActionSubstitution->PersonReplacing->find('list');
		$personReplacingPositions = $this->SoccerActionSubstitution->PersonReplacingPosition->find('list');
		$this->set(compact('soccerEventStates','personOriginals','personOriginalPositions','personReplacings','personReplacingPositions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerActionSubstitution', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerActionSubstitution->del($id)) {
			$this->Session->setFlash(__('SoccerActionSubstitution deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>