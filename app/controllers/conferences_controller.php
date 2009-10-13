<?php
class ConferencesController extends AppController {

	var $name = 'Conferences';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Conference->recursive = 0;
		$this->set('conferences', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Conference.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('conference', $this->Conference->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Conference->create();
			if ($this->Conference->save($this->data)) {
				$this->Session->setFlash(__('The Conference has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Conference could not be saved. Please, try again.', true));
			}
		}
		$leagues = $this->Conference->League->find('list');
		$this->set(compact('leagues'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Conference', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Conference->save($this->data)) {
				$this->Session->setFlash(__('The Conference has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Conference could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Conference->read(null, $id);
		}
		$leagues = $this->Conference->League->find('list');
		$this->set(compact('leagues'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Conference', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Conference->del($id)) {
			$this->Session->setFlash(__('Conference deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>