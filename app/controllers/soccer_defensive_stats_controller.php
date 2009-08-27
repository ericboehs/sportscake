<?php
class SoccerDefensiveStatsController extends AppController {

	var $name = 'SoccerDefensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerDefensiveStat->recursive = 0;
		$this->set('soccerDefensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerDefensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerDefensiveStat', $this->SoccerDefensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerDefensiveStat->create();
			if ($this->SoccerDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The SoccerDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerDefensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The SoccerDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerDefensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerDefensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerDefensiveStat->del($id)) {
			$this->Session->setFlash(__('SoccerDefensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>