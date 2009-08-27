<?php
class TeamPhasesController extends AppController {

	var $name = 'TeamPhases';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TeamPhase->recursive = 0;
		$this->set('teamPhases', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TeamPhase.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('teamPhase', $this->TeamPhase->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TeamPhase->create();
			if ($this->TeamPhase->save($this->data)) {
				$this->Session->setFlash(__('The TeamPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TeamPhase could not be saved. Please, try again.', true));
			}
		}
		$teams = $this->TeamPhase->Team->find('list');
		$startSeasons = $this->TeamPhase->StartSeason->find('list');
		$endSeasons = $this->TeamPhase->EndSeason->find('list');
		$affiliations = $this->TeamPhase->Affiliation->find('list');
		$roles = $this->TeamPhase->Role->find('list');
		$this->set(compact('teams', 'startSeasons', 'endSeasons', 'affiliations', 'roles'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TeamPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TeamPhase->save($this->data)) {
				$this->Session->setFlash(__('The TeamPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TeamPhase could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TeamPhase->read(null, $id);
		}
		$teams = $this->TeamPhase->Team->find('list');
		$startSeasons = $this->TeamPhase->StartSeason->find('list');
		$endSeasons = $this->TeamPhase->EndSeason->find('list');
		$affiliations = $this->TeamPhase->Affiliation->find('list');
		$roles = $this->TeamPhase->Role->find('list');
		$this->set(compact('teams','startSeasons','endSeasons','affiliations','roles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TeamPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TeamPhase->del($id)) {
			$this->Session->setFlash(__('TeamPhase deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>