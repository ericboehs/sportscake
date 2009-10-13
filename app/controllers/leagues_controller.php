<?php
class LeaguesController extends AppController {

	var $name = 'Leagues';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->League->recursive = 0;
		$this->set('leagues', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid League.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('league', $this->League->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->League->create();
			if ($this->League->save($this->data)) {
				$this->Session->setFlash(__('The League has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The League could not be saved. Please, try again.', true));
			}
		}
		$sports = $this->League->Sport->find('list');
		$this->set(compact('sports'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid League', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->League->save($this->data)) {
				$this->Session->setFlash(__('The League has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The League could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->League->read(null, $id);
		}
		$sports = $this->League->Sport->find('list');
		$this->set(compact('sports'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for League', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->League->del($id)) {
			$this->Session->setFlash(__('League deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>