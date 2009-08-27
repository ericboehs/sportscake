<?php
class MotorRacingRaceStatsController extends AppController {

	var $name = 'MotorRacingRaceStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MotorRacingRaceStat->recursive = 0;
		$this->set('motorRacingRaceStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MotorRacingRaceStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('motorRacingRaceStat', $this->MotorRacingRaceStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MotorRacingRaceStat->create();
			if ($this->MotorRacingRaceStat->save($this->data)) {
				$this->Session->setFlash(__('The MotorRacingRaceStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MotorRacingRaceStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MotorRacingRaceStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MotorRacingRaceStat->save($this->data)) {
				$this->Session->setFlash(__('The MotorRacingRaceStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MotorRacingRaceStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MotorRacingRaceStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MotorRacingRaceStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MotorRacingRaceStat->del($id)) {
			$this->Session->setFlash(__('MotorRacingRaceStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>