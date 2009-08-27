<?php
class LatestRevisionsController extends AppController {

	var $name = 'LatestRevisions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->LatestRevision->recursive = 0;
		$this->set('latestRevisions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid LatestRevision.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('latestRevision', $this->LatestRevision->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LatestRevision->create();
			if ($this->LatestRevision->save($this->data)) {
				$this->Session->setFlash(__('The LatestRevision has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The LatestRevision could not be saved. Please, try again.', true));
			}
		}
		$latestDocuments = $this->LatestRevision->LatestDocument->find('list');
		$this->set(compact('latestDocuments'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid LatestRevision', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->LatestRevision->save($this->data)) {
				$this->Session->setFlash(__('The LatestRevision has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The LatestRevision could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LatestRevision->read(null, $id);
		}
		$latestDocuments = $this->LatestRevision->LatestDocument->find('list');
		$this->set(compact('latestDocuments'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for LatestRevision', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LatestRevision->del($id)) {
			$this->Session->setFlash(__('LatestRevision deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>