<?php
class EventActionPlaysController extends AppController {

	var $name = 'EventActionPlays';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventActionPlay->recursive = 0;
		$this->set('eventActionPlays', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventActionPlay.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventActionPlay', $this->EventActionPlay->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventActionPlay->create();
			if ($this->EventActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The EventActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionPlay could not be saved. Please, try again.', true));
			}
		}
		$eventStates = $this->EventActionPlay->EventState->find('list');
		$this->set(compact('eventStates'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The EventActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionPlay could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventActionPlay->read(null, $id);
		}
		$eventStates = $this->EventActionPlay->EventState->find('list');
		$this->set(compact('eventStates'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventActionPlay->del($id)) {
			$this->Session->setFlash(__('EventActionPlay deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>