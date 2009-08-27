<?php
class AmericanFootballSpecialTeamsStatsController extends AppController {

	var $name = 'AmericanFootballSpecialTeamsStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballSpecialTeamsStat->recursive = 0;
		$this->set('americanFootballSpecialTeamsStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballSpecialTeamsStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballSpecialTeamsStat', $this->AmericanFootballSpecialTeamsStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballSpecialTeamsStat->create();
			if ($this->AmericanFootballSpecialTeamsStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballSpecialTeamsStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballSpecialTeamsStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballSpecialTeamsStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballSpecialTeamsStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballSpecialTeamsStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballSpecialTeamsStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballSpecialTeamsStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballSpecialTeamsStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballSpecialTeamsStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballSpecialTeamsStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>