<?php
class IceHockeyDefensiveStatsController extends AppController {

	var $name = 'IceHockeyDefensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IceHockeyDefensiveStat->recursive = 0;
		$this->set('iceHockeyDefensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IceHockeyDefensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('iceHockeyDefensiveStat', $this->IceHockeyDefensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IceHockeyDefensiveStat->create();
			if ($this->IceHockeyDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyDefensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IceHockeyDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IceHockeyDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyDefensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IceHockeyDefensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IceHockeyDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IceHockeyDefensiveStat->del($id)) {
			$this->Session->setFlash(__('IceHockeyDefensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>