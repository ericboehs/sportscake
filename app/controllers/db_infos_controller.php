<?php
class DbInfosController extends AppController {

	var $name = 'DbInfos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DbInfo->recursive = 0;
		$this->set('dbInfos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DbInfo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('dbInfo', $this->DbInfo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DbInfo->create();
			if ($this->DbInfo->save($this->data)) {
				$this->Session->setFlash(__('The DbInfo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DbInfo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DbInfo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DbInfo->save($this->data)) {
				$this->Session->setFlash(__('The DbInfo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DbInfo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DbInfo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DbInfo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DbInfo->del($id)) {
			$this->Session->setFlash(__('DbInfo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>