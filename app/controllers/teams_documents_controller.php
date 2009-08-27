<?php
class TeamsDocumentsController extends AppController {

	var $name = 'TeamsDocuments';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TeamsDocument->recursive = 0;
		$this->set('teamsDocuments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TeamsDocument.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('teamsDocument', $this->TeamsDocument->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TeamsDocument->create();
			if ($this->TeamsDocument->save($this->data)) {
				$this->Session->setFlash(__('The TeamsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TeamsDocument could not be saved. Please, try again.', true));
			}
		}
		$teams = $this->TeamsDocument->Team->find('list');
		$documents = $this->TeamsDocument->Document->find('list');
		$this->set(compact('teams', 'documents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TeamsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TeamsDocument->save($this->data)) {
				$this->Session->setFlash(__('The TeamsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TeamsDocument could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TeamsDocument->read(null, $id);
		}
		$teams = $this->TeamsDocument->Team->find('list');
		$documents = $this->TeamsDocument->Document->find('list');
		$this->set(compact('teams','documents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TeamsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TeamsDocument->del($id)) {
			$this->Session->setFlash(__('TeamsDocument deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>