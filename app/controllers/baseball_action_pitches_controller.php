<?php
class BaseballActionPitchesController extends AppController {

	var $name = 'BaseballActionPitches';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballActionPitch->recursive = 0;
		$this->set('baseballActionPitches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballActionPitch.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballActionPitch', $this->BaseballActionPitch->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballActionPitch->create();
			if ($this->BaseballActionPitch->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionPitch has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionPitch could not be saved. Please, try again.', true));
			}
		}
		$baseballActionPlays = $this->BaseballActionPitch->BaseballActionPlay->find('list');
		$baseballDefensiveGroups = $this->BaseballActionPitch->BaseballDefensiveGroup->find('list');
		$this->set(compact('baseballActionPlays', 'baseballDefensiveGroups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballActionPitch', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballActionPitch->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionPitch has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionPitch could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballActionPitch->read(null, $id);
		}
		$baseballActionPlays = $this->BaseballActionPitch->BaseballActionPlay->find('list');
		$baseballDefensiveGroups = $this->BaseballActionPitch->BaseballDefensiveGroup->find('list');
		$this->set(compact('baseballActionPlays','baseballDefensiveGroups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballActionPitch', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballActionPitch->del($id)) {
			$this->Session->setFlash(__('BaseballActionPitch deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>