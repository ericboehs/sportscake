<?php
class PenaltyStatsController extends AppController {

	var $name = 'PenaltyStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->PenaltyStat->recursive = 0;
		$this->set('penaltyStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PenaltyStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('penaltyStat', $this->PenaltyStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PenaltyStat->create();
			if ($this->PenaltyStat->save($this->data)) {
				$this->Session->setFlash(__('The PenaltyStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PenaltyStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PenaltyStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PenaltyStat->save($this->data)) {
				$this->Session->setFlash(__('The PenaltyStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PenaltyStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PenaltyStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PenaltyStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PenaltyStat->del($id)) {
			$this->Session->setFlash(__('PenaltyStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>