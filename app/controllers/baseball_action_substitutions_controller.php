<?php
class BaseballActionSubstitutionsController extends AppController {

	var $name = 'BaseballActionSubstitutions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballActionSubstitution->recursive = 0;
		$this->set('baseballActionSubstitutions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballActionSubstitution.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballActionSubstitution', $this->BaseballActionSubstitution->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballActionSubstitution->create();
			if ($this->BaseballActionSubstitution->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionSubstitution has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionSubstitution could not be saved. Please, try again.', true));
			}
		}
		$baseballEventStates = $this->BaseballActionSubstitution->BaseballEventState->find('list');
		$personOriginals = $this->BaseballActionSubstitution->PersonOriginal->find('list');
		$personOriginalPositions = $this->BaseballActionSubstitution->PersonOriginalPosition->find('list');
		$personReplacings = $this->BaseballActionSubstitution->PersonReplacing->find('list');
		$personReplacingPositions = $this->BaseballActionSubstitution->PersonReplacingPosition->find('list');
		$this->set(compact('baseballEventStates', 'personOriginals', 'personOriginalPositions', 'personReplacings', 'personReplacingPositions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballActionSubstitution', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballActionSubstitution->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionSubstitution has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionSubstitution could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballActionSubstitution->read(null, $id);
		}
		$baseballEventStates = $this->BaseballActionSubstitution->BaseballEventState->find('list');
		$personOriginals = $this->BaseballActionSubstitution->PersonOriginal->find('list');
		$personOriginalPositions = $this->BaseballActionSubstitution->PersonOriginalPosition->find('list');
		$personReplacings = $this->BaseballActionSubstitution->PersonReplacing->find('list');
		$personReplacingPositions = $this->BaseballActionSubstitution->PersonReplacingPosition->find('list');
		$this->set(compact('baseballEventStates','personOriginals','personOriginalPositions','personReplacings','personReplacingPositions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballActionSubstitution', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballActionSubstitution->del($id)) {
			$this->Session->setFlash(__('BaseballActionSubstitution deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>