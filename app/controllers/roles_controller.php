<?php
class RolesController extends AppController {

	var $name = 'Roles';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Role->recursive = 0;
		$this->set('roles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Role.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('role', $this->Role->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Role->create();
			if ($this->Role->save($this->data)) {
				$this->Session->setFlash(__('The Role has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Role could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Role', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Role->save($this->data)) {
				$this->Session->setFlash(__('The Role has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Role could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Role->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Role', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Role->del($id)) {
			$this->Session->setFlash(__('Role deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>