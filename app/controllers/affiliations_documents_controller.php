<?php
class AffiliationsDocumentsController extends AppController {

	var $name = 'AffiliationsDocuments';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AffiliationsDocument->recursive = 0;
		$this->set('affiliationsDocuments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AffiliationsDocument.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('affiliationsDocument', $this->AffiliationsDocument->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AffiliationsDocument->create();
			if ($this->AffiliationsDocument->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationsDocument could not be saved. Please, try again.', true));
			}
		}
		$affiliations = $this->AffiliationsDocument->Affiliation->find('list');
		$documents = $this->AffiliationsDocument->Document->find('list');
		$this->set(compact('affiliations', 'documents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AffiliationsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AffiliationsDocument->save($this->data)) {
				$this->Session->setFlash(__('The AffiliationsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AffiliationsDocument could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AffiliationsDocument->read(null, $id);
		}
		$affiliations = $this->AffiliationsDocument->Affiliation->find('list');
		$documents = $this->AffiliationsDocument->Document->find('list');
		$this->set(compact('affiliations','documents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AffiliationsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AffiliationsDocument->del($id)) {
			$this->Session->setFlash(__('AffiliationsDocument deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>