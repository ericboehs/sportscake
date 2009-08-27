<?php
class BaseballActionContactDetailsController extends AppController {

	var $name = 'BaseballActionContactDetails';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballActionContactDetail->recursive = 0;
		$this->set('baseballActionContactDetails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballActionContactDetail.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballActionContactDetail', $this->BaseballActionContactDetail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballActionContactDetail->create();
			if ($this->BaseballActionContactDetail->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionContactDetail has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionContactDetail could not be saved. Please, try again.', true));
			}
		}
		$baseballActionPitches = $this->BaseballActionContactDetail->BaseballActionPitch->find('list');
		$this->set(compact('baseballActionPitches'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballActionContactDetail', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballActionContactDetail->save($this->data)) {
				$this->Session->setFlash(__('The BaseballActionContactDetail has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballActionContactDetail could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballActionContactDetail->read(null, $id);
		}
		$baseballActionPitches = $this->BaseballActionContactDetail->BaseballActionPitch->find('list');
		$this->set(compact('baseballActionPitches'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballActionContactDetail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballActionContactDetail->del($id)) {
			$this->Session->setFlash(__('BaseballActionContactDetail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>