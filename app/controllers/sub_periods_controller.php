<?php
class SubPeriodsController extends AppController {

	var $name = 'SubPeriods';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SubPeriod->recursive = 0;
		$this->set('subPeriods', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SubPeriod.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('subPeriod', $this->SubPeriod->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubPeriod->create();
			if ($this->SubPeriod->save($this->data)) {
				$this->Session->setFlash(__('The SubPeriod has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubPeriod could not be saved. Please, try again.', true));
			}
		}
		$periods = $this->SubPeriod->Period->find('list');
		$this->set(compact('periods'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SubPeriod', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubPeriod->save($this->data)) {
				$this->Session->setFlash(__('The SubPeriod has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SubPeriod could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubPeriod->read(null, $id);
		}
		$periods = $this->SubPeriod->Period->find('list');
		$this->set(compact('periods'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SubPeriod', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubPeriod->del($id)) {
			$this->Session->setFlash(__('SubPeriod deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>