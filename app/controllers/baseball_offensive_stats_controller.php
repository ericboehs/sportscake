<?php
class BaseballOffensiveStatsController extends AppController {

	var $name = 'BaseballOffensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballOffensiveStat->recursive = 0;
		$this->set('baseballOffensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballOffensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballOffensiveStat', $this->BaseballOffensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballOffensiveStat->create();
			if ($this->BaseballOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BaseballOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballOffensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BaseballOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballOffensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballOffensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballOffensiveStat->del($id)) {
			$this->Session->setFlash(__('BaseballOffensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>