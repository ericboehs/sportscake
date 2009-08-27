<?php
class AmericanFootballActionParticipantsController extends AppController {

	var $name = 'AmericanFootballActionParticipants';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballActionParticipant->recursive = 0;
		$this->set('americanFootballActionParticipants', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballActionParticipant.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballActionParticipant', $this->AmericanFootballActionParticipant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballActionParticipant->create();
			if ($this->AmericanFootballActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballActionParticipant could not be saved. Please, try again.', true));
			}
		}
		$americanFootballActionPlays = $this->AmericanFootballActionParticipant->AmericanFootballActionPlay->find('list');
		$people = $this->AmericanFootballActionParticipant->Person->find('list');
		$this->set(compact('americanFootballActionPlays', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballActionParticipant->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballActionParticipant has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballActionParticipant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballActionParticipant->read(null, $id);
		}
		$americanFootballActionPlays = $this->AmericanFootballActionParticipant->AmericanFootballActionPlay->find('list');
		$people = $this->AmericanFootballActionParticipant->Person->find('list');
		$this->set(compact('americanFootballActionPlays','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballActionParticipant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballActionParticipant->del($id)) {
			$this->Session->setFlash(__('AmericanFootballActionParticipant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>