<?php
class PersonPhasesController extends AppController {

	var $name = 'PersonPhases';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->PersonPhase->recursive = 0;
		$this->set('personPhases', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PersonPhase.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('personPhase', $this->PersonPhase->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PersonPhase->create();
			if ($this->PersonPhase->save($this->data)) {
				$this->Session->setFlash(__('The PersonPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonPhase could not be saved. Please, try again.', true));
			}
		}
		$people = $this->PersonPhase->Person->find('list');
		$roles = $this->PersonPhase->Role->find('list');
		$regularPositions = $this->PersonPhase->RegularPosition->find('list');
		$startSeasons = $this->PersonPhase->StartSeason->find('list');
		$endSeasons = $this->PersonPhase->EndSeason->find('list');
		$this->set(compact('people', 'roles', 'regularPositions', 'startSeasons', 'endSeasons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PersonPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PersonPhase->save($this->data)) {
				$this->Session->setFlash(__('The PersonPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonPhase could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PersonPhase->read(null, $id);
		}
		$people = $this->PersonPhase->Person->find('list');
		$roles = $this->PersonPhase->Role->find('list');
		$regularPositions = $this->PersonPhase->RegularPosition->find('list');
		$startSeasons = $this->PersonPhase->StartSeason->find('list');
		$endSeasons = $this->PersonPhase->EndSeason->find('list');
		$this->set(compact('people','roles','regularPositions','startSeasons','endSeasons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PersonPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PersonPhase->del($id)) {
			$this->Session->setFlash(__('PersonPhase deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>