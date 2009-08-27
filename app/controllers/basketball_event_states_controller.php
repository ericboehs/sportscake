<?php
class BasketballEventStatesController extends AppController {

	var $name = 'BasketballEventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BasketballEventState->recursive = 0;
		$this->set('basketballEventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BasketballEventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('basketballEventState', $this->BasketballEventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BasketballEventState->create();
			if ($this->BasketballEventState->save($this->data)) {
				$this->Session->setFlash(__('The BasketballEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballEventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->BasketballEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BasketballEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BasketballEventState->save($this->data)) {
				$this->Session->setFlash(__('The BasketballEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballEventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BasketballEventState->read(null, $id);
		}
		$events = $this->BasketballEventState->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BasketballEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BasketballEventState->del($id)) {
			$this->Session->setFlash(__('BasketballEventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>