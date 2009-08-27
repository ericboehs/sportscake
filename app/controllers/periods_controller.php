<?php
class PeriodsController extends AppController {

	var $name = 'Periods';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Period->recursive = 0;
		$this->set('periods', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Period.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('period', $this->Period->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Period->create();
			if ($this->Period->save($this->data)) {
				$this->Session->setFlash(__('The Period has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Period could not be saved. Please, try again.', true));
			}
		}
		$participantsEvents = $this->Period->ParticipantsEvent->find('list');
		$this->set(compact('participantsEvents'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Period', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Period->save($this->data)) {
				$this->Session->setFlash(__('The Period has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Period could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Period->read(null, $id);
		}
		$participantsEvents = $this->Period->ParticipantsEvent->find('list');
		$this->set(compact('participantsEvents'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Period', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Period->del($id)) {
			$this->Session->setFlash(__('Period deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>