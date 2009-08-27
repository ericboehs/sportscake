<?php
class AffiliationsEventsController extends AppController {

	var $name = 'AffiliationsEvents';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AffiliationsEvent->recursive = 0;
		$this->set('affiliationsEvents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AffiliationsEvent.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('affiliationsEvent', $this->AffiliationsEvent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AffiliationsEvent->create();
			if ($this->AffiliationsEvent->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationsEvent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationsEvent could not be saved. Please, try again.', true));
			}
		}
		$affiliations = $this->AffiliationsEvent->Affiliation->find('list');
		$events = $this->AffiliationsEvent->Event->find('list');
		$this->set(compact('affiliations', 'events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AffiliationsEvent', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AffiliationsEvent->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationsEvent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationsEvent could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AffiliationsEvent->read(null, $id);
		}
		$affiliations = $this->AffiliationsEvent->Affiliation->find('list');
		$events = $this->AffiliationsEvent->Event->find('list');
		$this->set(compact('affiliations','events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AffiliationsEvent', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AffiliationsEvent->del($id)) {
			$this->Session->setFlash(__('AffiliationsEvent deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>