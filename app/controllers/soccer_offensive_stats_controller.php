<?php
class SoccerOffensiveStatsController extends AppController {

	var $name = 'SoccerOffensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerOffensiveStat->recursive = 0;
		$this->set('soccerOffensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerOffensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerOffensiveStat', $this->SoccerOffensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerOffensiveStat->create();
			if ($this->SoccerOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The SoccerOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerOffensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The SoccerOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerOffensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerOffensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerOffensiveStat->del($id)) {
			$this->Session->setFlash(__('SoccerOffensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>