<?php
class DocumentFixturesController extends AppController {

	var $name = 'DocumentFixtures';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DocumentFixture->recursive = 0;
		$this->set('documentFixtures', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DocumentFixture.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('documentFixture', $this->DocumentFixture->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocumentFixture->create();
			if ($this->DocumentFixture->save($this->data)) {
				$this->Session->setFlash(__('The DocumentFixture has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentFixture could not be saved. Please, try again.', true));
			}
		}
		$events = $this->DocumentFixture->Event->find('list');
		$publishers = $this->DocumentFixture->Publisher->find('list');
		$documentClasses = $this->DocumentFixture->DocumentClass->find('list');
		$this->set(compact('events', 'publishers', 'documentClasses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DocumentFixture', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocumentFixture->save($this->data)) {
				$this->Session->setFlash(__('The DocumentFixture has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentFixture could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocumentFixture->read(null, $id);
		}
		$events = $this->DocumentFixture->Event->find('list');
		$publishers = $this->DocumentFixture->Publisher->find('list');
		$documentClasses = $this->DocumentFixture->DocumentClass->find('list');
		$this->set(compact('events','publishers','documentClasses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DocumentFixture', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocumentFixture->del($id)) {
			$this->Session->setFlash(__('DocumentFixture deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>