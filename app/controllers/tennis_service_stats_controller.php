<?php
class TennisServiceStatsController extends AppController {

	var $name = 'TennisServiceStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TennisServiceStat->recursive = 0;
		$this->set('tennisServiceStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TennisServiceStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tennisServiceStat', $this->TennisServiceStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TennisServiceStat->create();
			if ($this->TennisServiceStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisServiceStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisServiceStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TennisServiceStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TennisServiceStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisServiceStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisServiceStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TennisServiceStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TennisServiceStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TennisServiceStat->del($id)) {
			$this->Session->setFlash(__('TennisServiceStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>