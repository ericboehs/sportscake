<?php
class AmericanFootballTeamStatsController extends AppController {

	var $name = 'AmericanFootballTeamStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballTeamStat->recursive = 0;
		$this->set('americanFootballTeamStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballTeamStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballTeamStat', $this->AmericanFootballTeamStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballTeamStat->create();
			if ($this->AmericanFootballTeamStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballTeamStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballTeamStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballTeamStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballTeamStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballTeamStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballTeamStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballTeamStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballTeamStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballTeamStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballTeamStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>