<?php
class BaseballDefensiveStatsController extends AppController {

	var $name = 'BaseballDefensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballDefensiveStat->recursive = 0;
		$this->set('baseballDefensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballDefensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballDefensiveStat', $this->BaseballDefensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballDefensiveStat->create();
			if ($this->BaseballDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BaseballDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballDefensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BaseballDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballDefensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballDefensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballDefensiveStat->del($id)) {
			$this->Session->setFlash(__('BaseballDefensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>