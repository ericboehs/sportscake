<?php
class EventActionPenaltiesController extends AppController {

	var $name = 'EventActionPenalties';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventActionPenalty->recursive = 0;
		$this->set('eventActionPenalties', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventActionPenalty.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventActionPenalty', $this->EventActionPenalty->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventActionPenalty->create();
			if ($this->EventActionPenalty->save($this->data)) {
				$this->Session->setFlash(__('The EventActionPenalty has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionPenalty could not be saved. Please, try again.', true));
			}
		}
		$eventStates = $this->EventActionPenalty->EventState->find('list');
		$this->set(compact('eventStates'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventActionPenalty', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventActionPenalty->save($this->data)) {
				$this->Session->setFlash(__('The EventActionPenalty has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionPenalty could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventActionPenalty->read(null, $id);
		}
		$eventStates = $this->EventActionPenalty->EventState->find('list');
		$this->set(compact('eventStates'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventActionPenalty', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventActionPenalty->del($id)) {
			$this->Session->setFlash(__('EventActionPenalty deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>