<?php
class BasketballTeamStatsController extends AppController {

	var $name = 'BasketballTeamStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BasketballTeamStat->recursive = 0;
		$this->set('basketballTeamStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BasketballTeamStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('basketballTeamStat', $this->BasketballTeamStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BasketballTeamStat->create();
			if ($this->BasketballTeamStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballTeamStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballTeamStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BasketballTeamStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BasketballTeamStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballTeamStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballTeamStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BasketballTeamStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BasketballTeamStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BasketballTeamStat->del($id)) {
			$this->Session->setFlash(__('BasketballTeamStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>