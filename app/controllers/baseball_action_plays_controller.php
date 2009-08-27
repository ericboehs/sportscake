<?php
class BaseballActionPlaysController extends AppController {

	var $name = 'BaseballActionPlays';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballActionPlay->recursive = 0;
		$this->set('baseballActionPlays', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballActionPlay.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballActionPlay', $this->BaseballActionPlay->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballActionPlay->create();
			if ($this->BaseballActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionPlay could not be saved. Please, try again.', true));
			}
		}
		$baseballEventStates = $this->BaseballActionPlay->BaseballEventState->find('list');
		$baseballDefensiveGroups = $this->BaseballActionPlay->BaseballDefensiveGroup->find('list');
		$this->set(compact('baseballEventStates', 'baseballDefensiveGroups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionPlay could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballActionPlay->read(null, $id);
		}
		$baseballEventStates = $this->BaseballActionPlay->BaseballEventState->find('list');
		$baseballDefensiveGroups = $this->BaseballActionPlay->BaseballDefensiveGroup->find('list');
		$this->set(compact('baseballEventStates','baseballDefensiveGroups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballActionPlay->del($id)) {
			$this->Session->setFlash(__('BaseballActionPlay deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>