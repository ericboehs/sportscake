<?php
class TennisTeamStatsController extends AppController {

	var $name = 'TennisTeamStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TennisTeamStat->recursive = 0;
		$this->set('tennisTeamStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TennisTeamStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tennisTeamStat', $this->TennisTeamStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TennisTeamStat->create();
			if ($this->TennisTeamStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisTeamStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisTeamStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TennisTeamStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TennisTeamStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisTeamStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisTeamStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TennisTeamStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TennisTeamStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TennisTeamStat->del($id)) {
			$this->Session->setFlash(__('TennisTeamStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>