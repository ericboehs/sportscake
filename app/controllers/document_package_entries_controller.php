<?php
class DocumentPackageEntriesController extends AppController {

	var $name = 'DocumentPackageEntries';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DocumentPackageEntry->recursive = 0;
		$this->set('documentPackageEntries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DocumentPackageEntry.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('documentPackageEntry', $this->DocumentPackageEntry->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocumentPackageEntry->create();
			if ($this->DocumentPackageEntry->save($this->data)) {
				$this->Session->setFlash(__('The DocumentPackageEntry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentPackageEntry could not be saved. Please, try again.', true));
			}
		}
		$documentPackages = $this->DocumentPackageEntry->DocumentPackage->find('list');
		$documents = $this->DocumentPackageEntry->Document->find('list');
		$this->set(compact('documentPackages', 'documents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DocumentPackageEntry', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocumentPackageEntry->save($this->data)) {
				$this->Session->setFlash(__('The DocumentPackageEntry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentPackageEntry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocumentPackageEntry->read(null, $id);
		}
		$documentPackages = $this->DocumentPackageEntry->DocumentPackage->find('list');
		$documents = $this->DocumentPackageEntry->Document->find('list');
		$this->set(compact('documentPackages','documents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DocumentPackageEntry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocumentPackageEntry->del($id)) {
			$this->Session->setFlash(__('DocumentPackageEntry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>