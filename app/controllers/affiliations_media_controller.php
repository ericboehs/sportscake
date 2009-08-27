<?php
class AffiliationsMediaController extends AppController {

	var $name = 'AffiliationsMedia';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AffiliationsMedium->recursive = 0;
		$this->set('affiliationsMedia', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AffiliationsMedium.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('affiliationsMedium', $this->AffiliationsMedium->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AffiliationsMedium->create();
			if ($this->AffiliationsMedium->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationsMedium could not be saved. Please, try again.', true));
			}
		}
		$affiliations = $this->AffiliationsMedium->Affiliation->find('list');
		$media = $this->AffiliationsMedium->Media->find('list');
		$this->set(compact('affiliations', 'media'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AffiliationsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AffiliationsMedium->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationsMedium could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AffiliationsMedium->read(null, $id);
		}
		$affiliations = $this->AffiliationsMedium->Affiliation->find('list');
		$media = $this->AffiliationsMedium->Media->find('list');
		$this->set(compact('affiliations','media'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AffiliationsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AffiliationsMedium->del($id)) {
			$this->Session->setFlash(__('AffiliationsMedium deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>