<?php
class BaseballDefensivePlayersController extends AppController {

	var $name = 'BaseballDefensivePlayers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballDefensivePlayer->recursive = 0;
		$this->set('baseballDefensivePlayers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballDefensivePlayer.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballDefensivePlayer', $this->BaseballDefensivePlayer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballDefensivePlayer->create();
			if ($this->BaseballDefensivePlayer->save($this->data)) {
				$this->Session->setFlash(__('The BaseballDefensivePlayer has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballDefensivePlayer could not be saved. Please, try again.', true));
			}
		}
		$baseballDefensiveGroups = $this->BaseballDefensivePlayer->BaseballDefensiveGroup->find('list');
		$players = $this->BaseballDefensivePlayer->Player->find('list');
		$positions = $this->BaseballDefensivePlayer->Position->find('list');
		$this->set(compact('baseballDefensiveGroups', 'players', 'positions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballDefensivePlayer', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballDefensivePlayer->save($this->data)) {
				$this->Session->setFlash(__('The BaseballDefensivePlayer has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballDefensivePlayer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballDefensivePlayer->read(null, $id);
		}
		$baseballDefensiveGroups = $this->BaseballDefensivePlayer->BaseballDefensiveGroup->find('list');
		$players = $this->BaseballDefensivePlayer->Player->find('list');
		$positions = $this->BaseballDefensivePlayer->Position->find('list');
		$this->set(compact('baseballDefensiveGroups','players','positions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballDefensivePlayer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballDefensivePlayer->del($id)) {
			$this->Session->setFlash(__('BaseballDefensivePlayer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>