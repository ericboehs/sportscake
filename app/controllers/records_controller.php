<?php
class RecordsController extends AppController {

	var $name = 'Records';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Record->recursive = 0;
		$this->set('records', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Record.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('record', $this->Record->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Record->create();
			if ($this->Record->save($this->data)) {
				$this->Session->setFlash(__('The Record has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Record could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Record', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Record->save($this->data)) {
				$this->Session->setFlash(__('The Record has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Record could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Record->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Record', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Record->del($id)) {
			$this->Session->setFlash(__('Record deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>