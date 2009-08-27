<?php
class PersonEventMetadataController extends AppController {

	var $name = 'PersonEventMetadata';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->PersonEventMetadatum->recursive = 0;
		$this->set('personEventMetadata', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PersonEventMetadatum.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('personEventMetadatum', $this->PersonEventMetadatum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PersonEventMetadatum->create();
			if ($this->PersonEventMetadatum->save($this->data)) {
				$this->Session->setFlash(__('The PersonEventMetadatum has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonEventMetadatum could not be saved. Please, try again.', true));
			}
		}
		$people = $this->PersonEventMetadatum->Person->find('list');
		$events = $this->PersonEventMetadatum->Event->find('list');
		$roles = $this->PersonEventMetadatum->Role->find('list');
		$positions = $this->PersonEventMetadatum->Position->find('list');
		$teams = $this->PersonEventMetadatum->Team->find('list');
		$this->set(compact('people', 'events', 'roles', 'positions', 'teams'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PersonEventMetadatum', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PersonEventMetadatum->save($this->data)) {
				$this->Session->setFlash(__('The PersonEventMetadatum has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonEventMetadatum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PersonEventMetadatum->read(null, $id);
		}
		$people = $this->PersonEventMetadatum->Person->find('list');
		$events = $this->PersonEventMetadatum->Event->find('list');
		$roles = $this->PersonEventMetadatum->Role->find('list');
		$positions = $this->PersonEventMetadatum->Position->find('list');
		$teams = $this->PersonEventMetadatum->Team->find('list');
		$this->set(compact('people','events','roles','positions','teams'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PersonEventMetadatum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PersonEventMetadatum->del($id)) {
			$this->Session->setFlash(__('PersonEventMetadatum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>