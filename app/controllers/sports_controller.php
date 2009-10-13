<?php
class SportsController extends AppController {

	var $name = 'Sports';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Sport->recursive = 0;
		$this->set('sports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Sport.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('sport', $this->Sport->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sport->create();
			if ($this->Sport->save($this->data)) {
				$this->Session->setFlash(__('The Sport has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Sport could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Sport', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sport->save($this->data)) {
				$this->Session->setFlash(__('The Sport has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Sport could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sport->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Sport', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sport->del($id)) {
			$this->Session->setFlash(__('Sport deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>