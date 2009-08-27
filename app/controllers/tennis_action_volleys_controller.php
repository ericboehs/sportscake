<?php
class TennisActionVolleysController extends AppController {

	var $name = 'TennisActionVolleys';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TennisActionVolley->recursive = 0;
		$this->set('tennisActionVolleys', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TennisActionVolley.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tennisActionVolley', $this->TennisActionVolley->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TennisActionVolley->create();
			if ($this->TennisActionVolley->save($this->data)) {
				$this->Session->setFlash(__('The TennisActionVolley has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisActionVolley could not be saved. Please, try again.', true));
			}
		}
		$tennisActionPoints = $this->TennisActionVolley->TennisActionPoint->find('list');
		$this->set(compact('tennisActionPoints'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TennisActionVolley', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TennisActionVolley->save($this->data)) {
				$this->Session->setFlash(__('The TennisActionVolley has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisActionVolley could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TennisActionVolley->read(null, $id);
		}
		$tennisActionPoints = $this->TennisActionVolley->TennisActionPoint->find('list');
		$this->set(compact('tennisActionPoints'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TennisActionVolley', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TennisActionVolley->del($id)) {
			$this->Session->setFlash(__('TennisActionVolley deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>