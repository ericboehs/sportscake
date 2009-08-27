<?php
class BaseballPitchingStatsController extends AppController {

	var $name = 'BaseballPitchingStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballPitchingStat->recursive = 0;
		$this->set('baseballPitchingStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballPitchingStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballPitchingStat', $this->BaseballPitchingStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballPitchingStat->create();
			if ($this->BaseballPitchingStat->save($this->data)) {
				$this->Session->setFlash(__('The BaseballPitchingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballPitchingStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballPitchingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballPitchingStat->save($this->data)) {
				$this->Session->setFlash(__('The BaseballPitchingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballPitchingStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballPitchingStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballPitchingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballPitchingStat->del($id)) {
			$this->Session->setFlash(__('BaseballPitchingStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>