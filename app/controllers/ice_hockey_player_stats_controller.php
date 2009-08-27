<?php
class IceHockeyPlayerStatsController extends AppController {

	var $name = 'IceHockeyPlayerStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->IceHockeyPlayerStat->recursive = 0;
		$this->set('iceHockeyPlayerStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid IceHockeyPlayerStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('iceHockeyPlayerStat', $this->IceHockeyPlayerStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IceHockeyPlayerStat->create();
			if ($this->IceHockeyPlayerStat->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyPlayerStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyPlayerStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid IceHockeyPlayerStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->IceHockeyPlayerStat->save($this->data)) {
				$this->Session->setFlash(__('The IceHockeyPlayerStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The IceHockeyPlayerStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IceHockeyPlayerStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for IceHockeyPlayerStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IceHockeyPlayerStat->del($id)) {
			$this->Session->setFlash(__('IceHockeyPlayerStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>