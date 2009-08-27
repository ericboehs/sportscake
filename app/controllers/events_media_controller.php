<?php
class EventsMediaController extends AppController {

	var $name = 'EventsMedia';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventsMedium->recursive = 0;
		$this->set('eventsMedia', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventsMedium.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventsMedium', $this->EventsMedium->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventsMedium->create();
			if ($this->EventsMedium->save($this->data)) {
				$this->Session->setFlash(__('The EventsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventsMedium could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventsMedium->Event->find('list');
		$media = $this->EventsMedium->Media->find('list');
		$this->set(compact('events', 'media'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventsMedium->save($this->data)) {
				$this->Session->setFlash(__('The EventsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventsMedium could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventsMedium->read(null, $id);
		}
		$events = $this->EventsMedium->Event->find('list');
		$media = $this->EventsMedium->Media->find('list');
		$this->set(compact('events','media'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventsMedium->del($id)) {
			$this->Session->setFlash(__('EventsMedium deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>