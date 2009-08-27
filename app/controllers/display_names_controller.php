<?php
class DisplayNamesController extends AppController {

	var $name = 'DisplayNames';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DisplayName->recursive = 0;
		$this->set('displayNames', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DisplayName.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('displayName', $this->DisplayName->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DisplayName->create();
			if ($this->DisplayName->save($this->data)) {
				$this->Session->setFlash(__('The DisplayName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DisplayName could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DisplayName', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DisplayName->save($this->data)) {
				$this->Session->setFlash(__('The DisplayName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DisplayName could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DisplayName->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DisplayName', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DisplayName->del($id)) {
			$this->Session->setFlash(__('DisplayName deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>