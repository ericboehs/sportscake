<?php
class SeasonsController extends AppController {

	var $name = 'Seasons';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Season->recursive = 0;
		$this->set('seasons', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Season.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('season', $this->Season->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Season->create();
			if ($this->Season->save($this->data)) {
				$this->Session->setFlash(__('The Season has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Season could not be saved. Please, try again.', true));
			}
		}
		$publishers = $this->Season->Publisher->find('list');
		$leagues = $this->Season->League->find('list');
		$this->set(compact('publishers', 'leagues'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Season', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Season->save($this->data)) {
				$this->Session->setFlash(__('The Season has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Season could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Season->read(null, $id);
		}
		$publishers = $this->Season->Publisher->find('list');
		$leagues = $this->Season->League->find('list');
		$this->set(compact('publishers','leagues'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Season', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Season->del($id)) {
			$this->Session->setFlash(__('Season deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>