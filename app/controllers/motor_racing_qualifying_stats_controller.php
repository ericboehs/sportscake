<?php
class MotorRacingQualifyingStatsController extends AppController {

	var $name = 'MotorRacingQualifyingStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MotorRacingQualifyingStat->recursive = 0;
		$this->set('motorRacingQualifyingStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MotorRacingQualifyingStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('motorRacingQualifyingStat', $this->MotorRacingQualifyingStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MotorRacingQualifyingStat->create();
			if ($this->MotorRacingQualifyingStat->save($this->data)) {
				$this->Session->setFlash(__('The MotorRacingQualifyingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MotorRacingQualifyingStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MotorRacingQualifyingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MotorRacingQualifyingStat->save($this->data)) {
				$this->Session->setFlash(__('The MotorRacingQualifyingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MotorRacingQualifyingStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MotorRacingQualifyingStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MotorRacingQualifyingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MotorRacingQualifyingStat->del($id)) {
			$this->Session->setFlash(__('MotorRacingQualifyingStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>