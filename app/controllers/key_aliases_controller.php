<?php
class KeyAliasesController extends AppController {

	var $name = 'KeyAliases';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->KeyAlias->recursive = 0;
		$this->set('keyAliases', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid KeyAlias.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('keyAlias', $this->KeyAlias->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->KeyAlias->create();
			if ($this->KeyAlias->save($this->data)) {
				$this->Session->setFlash(__('The KeyAlias has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The KeyAlias could not be saved. Please, try again.', true));
			}
		}
		$keyRoots = $this->KeyAlias->KeyRoot->find('list');
		$this->set(compact('keyRoots'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid KeyAlias', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->KeyAlias->save($this->data)) {
				$this->Session->setFlash(__('The KeyAlias has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The KeyAlias could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->KeyAlias->read(null, $id);
		}
		$keyRoots = $this->KeyAlias->KeyRoot->find('list');
		$this->set(compact('keyRoots'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for KeyAlias', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->KeyAlias->del($id)) {
			$this->Session->setFlash(__('KeyAlias deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>