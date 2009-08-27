<?php
class SoccerActionPlaysController extends AppController {

	var $name = 'SoccerActionPlays';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerActionPlay->recursive = 0;
		$this->set('soccerActionPlays', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerActionPlay.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerActionPlay', $this->SoccerActionPlay->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerActionPlay->create();
			if ($this->SoccerActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionPlay could not be saved. Please, try again.', true));
			}
		}
		$soccerEventStates = $this->SoccerActionPlay->SoccerEventState->find('list');
		$this->set(compact('soccerEventStates'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The SoccerActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerActionPlay could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerActionPlay->read(null, $id);
		}
		$soccerEventStates = $this->SoccerActionPlay->SoccerEventState->find('list');
		$this->set(compact('soccerEventStates'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerActionPlay->del($id)) {
			$this->Session->setFlash(__('SoccerActionPlay deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>