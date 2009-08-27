<?php
class InjuryPhasesController extends AppController {

	var $name = 'InjuryPhases';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->InjuryPhase->recursive = 0;
		$this->set('injuryPhases', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid InjuryPhase.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('injuryPhase', $this->InjuryPhase->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->InjuryPhase->create();
			if ($this->InjuryPhase->save($this->data)) {
				$this->Session->setFlash(__('The InjuryPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The InjuryPhase could not be saved. Please, try again.', true));
			}
		}
		$people = $this->InjuryPhase->Person->find('list');
		$seasons = $this->InjuryPhase->Season->find('list');
		$this->set(compact('people', 'seasons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid InjuryPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->InjuryPhase->save($this->data)) {
				$this->Session->setFlash(__('The InjuryPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The InjuryPhase could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->InjuryPhase->read(null, $id);
		}
		$people = $this->InjuryPhase->Person->find('list');
		$seasons = $this->InjuryPhase->Season->find('list');
		$this->set(compact('people','seasons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for InjuryPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->InjuryPhase->del($id)) {
			$this->Session->setFlash(__('InjuryPhase deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>