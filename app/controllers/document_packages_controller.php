<?php
class DocumentPackagesController extends AppController {

	var $name = 'DocumentPackages';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DocumentPackage->recursive = 0;
		$this->set('documentPackages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DocumentPackage.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('documentPackage', $this->DocumentPackage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocumentPackage->create();
			if ($this->DocumentPackage->save($this->data)) {
				$this->Session->setFlash(__('The DocumentPackage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentPackage could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DocumentPackage', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocumentPackage->save($this->data)) {
				$this->Session->setFlash(__('The DocumentPackage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentPackage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocumentPackage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DocumentPackage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocumentPackage->del($id)) {
			$this->Session->setFlash(__('DocumentPackage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>