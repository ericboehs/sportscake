<?php
class KeyRootsController extends AppController {

	var $name = 'KeyRoots';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->KeyRoot->recursive = 0;
		$this->set('keyRoots', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid KeyRoot.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('keyRoot', $this->KeyRoot->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->KeyRoot->create();
			if ($this->KeyRoot->save($this->data)) {
				$this->Session->setFlash(__('The KeyRoot has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The KeyRoot could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid KeyRoot', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->KeyRoot->save($this->data)) {
				$this->Session->setFlash(__('The KeyRoot has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The KeyRoot could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->KeyRoot->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for KeyRoot', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->KeyRoot->del($id)) {
			$this->Session->setFlash(__('KeyRoot deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>