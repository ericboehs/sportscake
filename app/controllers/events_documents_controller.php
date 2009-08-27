<?php
class EventsDocumentsController extends AppController {

	var $name = 'EventsDocuments';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventsDocument->recursive = 0;
		$this->set('eventsDocuments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventsDocument.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventsDocument', $this->EventsDocument->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventsDocument->create();
			if ($this->EventsDocument->save($this->data)) {
				$this->Session->setFlash(__('The EventsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventsDocument could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventsDocument->Event->find('list');
		$documents = $this->EventsDocument->Document->find('list');
		$this->set(compact('events', 'documents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventsDocument->save($this->data)) {
				$this->Session->setFlash(__('The EventsDocument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventsDocument could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventsDocument->read(null, $id);
		}
		$events = $this->EventsDocument->Event->find('list');
		$documents = $this->EventsDocument->Document->find('list');
		$this->set(compact('events','documents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventsDocument', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventsDocument->del($id)) {
			$this->Session->setFlash(__('EventsDocument deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>