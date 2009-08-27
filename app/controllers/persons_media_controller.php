<?php
class PersonsMediaController extends AppController {

	var $name = 'PersonsMedia';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->PersonsMedium->recursive = 0;
		$this->set('personsMedia', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PersonsMedium.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('personsMedium', $this->PersonsMedium->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PersonsMedium->create();
			if ($this->PersonsMedium->save($this->data)) {
				$this->Session->setFlash(__('The PersonsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonsMedium could not be saved. Please, try again.', true));
			}
		}
		$people = $this->PersonsMedium->Person->find('list');
		$media = $this->PersonsMedium->Media->find('list');
		$this->set(compact('people', 'media'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PersonsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PersonsMedium->save($this->data)) {
				$this->Session->setFlash(__('The PersonsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PersonsMedium could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PersonsMedium->read(null, $id);
		}
		$people = $this->PersonsMedium->Person->find('list');
		$media = $this->PersonsMedium->Media->find('list');
		$this->set(compact('people','media'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PersonsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PersonsMedium->del($id)) {
			$this->Session->setFlash(__('PersonsMedium deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>