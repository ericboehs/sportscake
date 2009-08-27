<?php
class DocumentContentsController extends AppController {

	var $name = 'DocumentContents';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DocumentContent->recursive = 0;
		$this->set('documentContents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DocumentContent.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('documentContent', $this->DocumentContent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocumentContent->create();
			if ($this->DocumentContent->save($this->data)) {
				$this->Session->setFlash(__('The DocumentContent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentContent could not be saved. Please, try again.', true));
			}
		}
		$documents = $this->DocumentContent->Document->find('list');
		$this->set(compact('documents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DocumentContent', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocumentContent->save($this->data)) {
				$this->Session->setFlash(__('The DocumentContent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentContent could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocumentContent->read(null, $id);
		}
		$documents = $this->DocumentContent->Document->find('list');
		$this->set(compact('documents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DocumentContent', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocumentContent->del($id)) {
			$this->Session->setFlash(__('DocumentContent deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>