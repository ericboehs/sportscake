<?php
class PersonsDocumentsController extends AppController {

	var $name = 'PersonsDocuments';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->PersonsDocument->recursive = 0;
		$this->set('personsDocuments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PersonsDocument.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('personsDocument', $this->PersonsDocument->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PersonsDocument->create();
			if ($this->PersonsDocument->save($this->data)) {
				$this->Session->setFlash(__('The PersonsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonsDocument could not be saved. Please, try again.', true));
			}
		}
		$people = $this->PersonsDocument->Person->find('list');
		$documents = $this->PersonsDocument->Document->find('list');
		$this->set(compact('people', 'documents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PersonsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PersonsDocument->save($this->data)) {
				$this->Session->setFlash(__('The PersonsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonsDocument could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PersonsDocument->read(null, $id);
		}
		$people = $this->PersonsDocument->Person->find('list');
		$documents = $this->PersonsDocument->Document->find('list');
		$this->set(compact('people','documents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PersonsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PersonsDocument->del($id)) {
			$this->Session->setFlash(__('PersonsDocument deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>