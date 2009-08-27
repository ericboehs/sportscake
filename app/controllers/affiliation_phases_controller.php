<?php
class AffiliationPhasesController extends AppController {

	var $name = 'AffiliationPhases';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AffiliationPhase->recursive = 0;
		$this->set('affiliationPhases', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AffiliationPhase.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('affiliationPhase', $this->AffiliationPhase->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AffiliationPhase->create();
			if ($this->AffiliationPhase->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationPhase could not be saved. Please, try again.', true));
			}
		}
		$affiliations = $this->AffiliationPhase->Affiliation->find('list');
		$ancestorAffiliations = $this->AffiliationPhase->AncestorAffiliation->find('list');
		$startSeasons = $this->AffiliationPhase->StartSeason->find('list');
		$endSeasons = $this->AffiliationPhase->EndSeason->find('list');
		$this->set(compact('affiliations', 'ancestorAffiliations', 'startSeasons', 'endSeasons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AffiliationPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AffiliationPhase->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationPhase has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationPhase could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AffiliationPhase->read(null, $id);
		}
		$affiliations = $this->AffiliationPhase->Affiliation->find('list');
		$ancestorAffiliations = $this->AffiliationPhase->AncestorAffiliation->find('list');
		$startSeasons = $this->AffiliationPhase->StartSeason->find('list');
		$endSeasons = $this->AffiliationPhase->EndSeason->find('list');
		$this->set(compact('affiliations','ancestorAffiliations','startSeasons','endSeasons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AffiliationPhase', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AffiliationPhase->del($id)) {
			$this->Session->setFlash(__('AffiliationPhase deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>