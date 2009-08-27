<?php
class StandingsController extends AppController {

	var $name = 'Standings';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Standing->recursive = 0;
		$this->set('standings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Standing.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('standing', $this->Standing->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Standing->create();
			if ($this->Standing->save($this->data)) {
				$this->Session->setFlash(__('The Standing has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Standing could not be saved. Please, try again.', true));
			}
		}
		$affiliations = $this->Standing->Affiliation->find('list');
		$subSeasons = $this->Standing->SubSeason->find('list');
		$this->set(compact('affiliations', 'subSeasons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Standing', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Standing->save($this->data)) {
				$this->Session->setFlash(__('The Standing has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Standing could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Standing->read(null, $id);
		}
		$affiliations = $this->Standing->Affiliation->find('list');
		$subSeasons = $this->Standing->SubSeason->find('list');
		$this->set(compact('affiliations','subSeasons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Standing', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Standing->del($id)) {
			$this->Session->setFlash(__('Standing deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>