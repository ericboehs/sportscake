<?php
class DocumentClassesController extends AppController {

	var $name = 'DocumentClasses';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DocumentClass->recursive = 0;
		$this->set('documentClasses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DocumentClass.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('documentClass', $this->DocumentClass->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocumentClass->create();
			if ($this->DocumentClass->save($this->data)) {
				$this->Session->setFlash(__('The DocumentClass has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentClass could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DocumentClass', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocumentClass->save($this->data)) {
				$this->Session->setFlash(__('The DocumentClass has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentClass could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocumentClass->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DocumentClass', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocumentClass->del($id)) {
			$this->Session->setFlash(__('DocumentClass deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>