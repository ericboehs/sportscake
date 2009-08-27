<?php
class EventActionSubstitutionsController extends AppController {

	var $name = 'EventActionSubstitutions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventActionSubstitution->recursive = 0;
		$this->set('eventActionSubstitutions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventActionSubstitution.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventActionSubstitution', $this->EventActionSubstitution->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventActionSubstitution->create();
			if ($this->EventActionSubstitution->save($this->data)) {
				$this->Session->setFlash(__('The EventActionSubstitution has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionSubstitution could not be saved. Please, try again.', true));
			}
		}
		$eventStates = $this->EventActionSubstitution->EventState->find('list');
		$personOriginals = $this->EventActionSubstitution->PersonOriginal->find('list');
		$personOriginalPositions = $this->EventActionSubstitution->PersonOriginalPosition->find('list');
		$personReplacings = $this->EventActionSubstitution->PersonReplacing->find('list');
		$personReplacingPositions = $this->EventActionSubstitution->PersonReplacingPosition->find('list');
		$this->set(compact('eventStates', 'personOriginals', 'personOriginalPositions', 'personReplacings', 'personReplacingPositions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventActionSubstitution', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventActionSubstitution->save($this->data)) {
				$this->Session->setFlash(__('The EventActionSubstitution has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionSubstitution could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventActionSubstitution->read(null, $id);
		}
		$eventStates = $this->EventActionSubstitution->EventState->find('list');
		$personOriginals = $this->EventActionSubstitution->PersonOriginal->find('list');
		$personOriginalPositions = $this->EventActionSubstitution->PersonOriginalPosition->find('list');
		$personReplacings = $this->EventActionSubstitution->PersonReplacing->find('list');
		$personReplacingPositions = $this->EventActionSubstitution->PersonReplacingPosition->find('list');
		$this->set(compact('eventStates','personOriginals','personOriginalPositions','personReplacings','personReplacingPositions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventActionSubstitution', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventActionSubstitution->del($id)) {
			$this->Session->setFlash(__('EventActionSubstitution deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>