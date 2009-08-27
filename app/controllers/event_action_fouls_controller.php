<?php
class EventActionFoulsController extends AppController {

	var $name = 'EventActionFouls';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->EventActionFoul->recursive = 0;
		$this->set('eventActionFouls', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid EventActionFoul.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('eventActionFoul', $this->EventActionFoul->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EventActionFoul->create();
			if ($this->EventActionFoul->save($this->data)) {
				$this->Session->setFlash(__('The EventActionFoul has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionFoul could not be saved. Please, try again.', true));
			}
		}
		$eventStates = $this->EventActionFoul->EventState->find('list');
		$this->set(compact('eventStates'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid EventActionFoul', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->EventActionFoul->save($this->data)) {
				$this->Session->setFlash(__('The EventActionFoul has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The EventActionFoul could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventActionFoul->read(null, $id);
		}
		$eventStates = $this->EventActionFoul->EventState->find('list');
		$this->set(compact('eventStates'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for EventActionFoul', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventActionFoul->del($id)) {
			$this->Session->setFlash(__('EventActionFoul deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>