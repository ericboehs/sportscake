<?php
class DocumentFixturesEventsController extends AppController {

	var $name = 'DocumentFixturesEvents';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DocumentFixturesEvent->recursive = 0;
		$this->set('documentFixturesEvents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DocumentFixturesEvent.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('documentFixturesEvent', $this->DocumentFixturesEvent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocumentFixturesEvent->create();
			if ($this->DocumentFixturesEvent->save($this->data)) {
				$this->Session->setFlash(__('The DocumentFixturesEvent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentFixturesEvent could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DocumentFixturesEvent', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocumentFixturesEvent->save($this->data)) {
				$this->Session->setFlash(__('The DocumentFixturesEvent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentFixturesEvent could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocumentFixturesEvent->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DocumentFixturesEvent', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocumentFixturesEvent->del($id)) {
			$this->Session->setFlash(__('DocumentFixturesEvent deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>