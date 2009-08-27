<?php
class EventsSubSeasonsController extends AppController {

	var $name = 'EventsSubSeasons';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventsSubSeason->recursive = 0;
		$this->set('eventsSubSeasons', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventsSubSeason.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventsSubSeason', $this->EventsSubSeason->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventsSubSeason->create();
			if ($this->EventsSubSeason->save($this->data)) {
				$this->Session->setFlash(__('The EventsSubSeason has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventsSubSeason could not be saved. Please, try again.', true));
			}
		}
		$events = $this->EventsSubSeason->Event->find('list');
		$subSeasons = $this->EventsSubSeason->SubSeason->find('list');
		$this->set(compact('events', 'subSeasons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventsSubSeason', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventsSubSeason->save($this->data)) {
				$this->Session->setFlash(__('The EventsSubSeason has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventsSubSeason could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventsSubSeason->read(null, $id);
		}
		$events = $this->EventsSubSeason->Event->find('list');
		$subSeasons = $this->EventsSubSeason->SubSeason->find('list');
		$this->set(compact('events','subSeasons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventsSubSeason', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventsSubSeason->del($id)) {
			$this->Session->setFlash(__('EventsSubSeason deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>