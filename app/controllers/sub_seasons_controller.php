<?php
class SubSeasonsController extends AppController {

	var $name = 'SubSeasons';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SubSeason->recursive = 0;
		$this->set('subSeasons', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SubSeason.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('subSeason', $this->SubSeason->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubSeason->create();
			if ($this->SubSeason->save($this->data)) {
				$this->Session->setFlash(__('The SubSeason has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubSeason could not be saved. Please, try again.', true));
			}
		}
		$events = $this->SubSeason->Event->find('list');
		$seasons = $this->SubSeason->Season->find('list');
		$this->set(compact('events', 'seasons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SubSeason', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubSeason->save($this->data)) {
				$this->Session->setFlash(__('The SubSeason has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubSeason could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubSeason->read(null, $id);
		}
		$events = $this->SubSeason->Event->find('list');
		$seasons = $this->SubSeason->Season->find('list');
		$this->set(compact('events','seasons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SubSeason', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubSeason->del($id)) {
			$this->Session->setFlash(__('SubSeason deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>