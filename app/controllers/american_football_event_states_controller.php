<?php
class AmericanFootballEventStatesController extends AppController {

	var $name = 'AmericanFootballEventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballEventState->recursive = 0;
		$this->set('americanFootballEventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballEventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballEventState', $this->AmericanFootballEventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballEventState->create();
			if ($this->AmericanFootballEventState->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballEventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->AmericanFootballEventState->Event->find('list');
		$teams = $this->AmericanFootballEventState->Team->find('list');
		$this->set(compact('events', 'teams'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballEventState->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballEventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballEventState->read(null, $id);
		}
		$events = $this->AmericanFootballEventState->Event->find('list');
		$teams = $this->AmericanFootballEventState->Team->find('list');
		$this->set(compact('events','teams'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballEventState->del($id)) {
			$this->Session->setFlash(__('AmericanFootballEventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>