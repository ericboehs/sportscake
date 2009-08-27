<?php
class IceHockeyActionPlaysController extends AppController {

	var $name = 'IceHockeyActionPlays';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IceHockeyActionPlay->recursive = 0;
		$this->set('iceHockeyActionPlays', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IceHockeyActionPlay.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('iceHockeyActionPlay', $this->IceHockeyActionPlay->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IceHockeyActionPlay->create();
			if ($this->IceHockeyActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyActionPlay could not be saved. Please, try again.', true));
			}
		}
		$iceHockeyEventStates = $this->IceHockeyActionPlay->IceHockeyEventState->find('list');
		$teams = $this->IceHockeyActionPlay->Team->find('list');
		$this->set(compact('iceHockeyEventStates', 'teams'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IceHockeyActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IceHockeyActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyActionPlay could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IceHockeyActionPlay->read(null, $id);
		}
		$iceHockeyEventStates = $this->IceHockeyActionPlay->IceHockeyEventState->find('list');
		$teams = $this->IceHockeyActionPlay->Team->find('list');
		$this->set(compact('iceHockeyEventStates','teams'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IceHockeyActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IceHockeyActionPlay->del($id)) {
			$this->Session->setFlash(__('IceHockeyActionPlay deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>