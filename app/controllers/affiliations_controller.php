<?php
class AffiliationsController extends AppController {

	var $name = 'Affiliations';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Affiliation->recursive = 0;
		$this->set('affiliations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Affiliation.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('affiliation', $this->Affiliation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Affiliation->create();
			if ($this->Affiliation->save($this->data)) {
				$this->Session->setFlash(__('The Affiliation has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Affiliation could not be saved. Please, try again.', true));
			}
		}
		$documents = $this->Affiliation->Document->find('list');
		$events = $this->Affiliation->Event->find('list');
		$media = $this->Affiliation->Media->find('list');
		$publishers = $this->Affiliation->Publisher->find('list');
		$this->set(compact('documents', 'events', 'media', 'publishers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Affiliation', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Affiliation->save($this->data)) {
				$this->Session->setFlash(__('The Affiliation has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Affiliation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Affiliation->read(null, $id);
		}
		$documents = $this->Affiliation->Document->find('list');
		$events = $this->Affiliation->Event->find('list');
		$media = $this->Affiliation->Media->find('list');
		$publishers = $this->Affiliation->Publisher->find('list');
		$this->set(compact('documents','events','media','publishers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Affiliation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Affiliation->del($id)) {
			$this->Session->setFlash(__('Affiliation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>