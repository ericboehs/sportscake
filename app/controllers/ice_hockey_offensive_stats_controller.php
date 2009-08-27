<?php
class IceHockeyOffensiveStatsController extends AppController {

	var $name = 'IceHockeyOffensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IceHockeyOffensiveStat->recursive = 0;
		$this->set('iceHockeyOffensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IceHockeyOffensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('iceHockeyOffensiveStat', $this->IceHockeyOffensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IceHockeyOffensiveStat->create();
			if ($this->IceHockeyOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyOffensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IceHockeyOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IceHockeyOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyOffensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IceHockeyOffensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IceHockeyOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IceHockeyOffensiveStat->del($id)) {
			$this->Session->setFlash(__('IceHockeyOffensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>