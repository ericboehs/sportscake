<?php
class TennisActionPointsController extends AppController {

	var $name = 'TennisActionPoints';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TennisActionPoint->recursive = 0;
		$this->set('tennisActionPoints', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TennisActionPoint.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tennisActionPoint', $this->TennisActionPoint->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TennisActionPoint->create();
			if ($this->TennisActionPoint->save($this->data)) {
				$this->Session->setFlash(__('The TennisActionPoint has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisActionPoint could not be saved. Please, try again.', true));
			}
		}
		$subPeriods = $this->TennisActionPoint->SubPeriod->find('list');
		$this->set(compact('subPeriods'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TennisActionPoint', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TennisActionPoint->save($this->data)) {
				$this->Session->setFlash(__('The TennisActionPoint has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisActionPoint could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TennisActionPoint->read(null, $id);
		}
		$subPeriods = $this->TennisActionPoint->SubPeriod->find('list');
		$this->set(compact('subPeriods'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TennisActionPoint', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TennisActionPoint->del($id)) {
			$this->Session->setFlash(__('TennisActionPoint deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>