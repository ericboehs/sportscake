<?php
class TennisSetStatsController extends AppController {

	var $name = 'TennisSetStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TennisSetStat->recursive = 0;
		$this->set('tennisSetStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TennisSetStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tennisSetStat', $this->TennisSetStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TennisSetStat->create();
			if ($this->TennisSetStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisSetStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisSetStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TennisSetStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TennisSetStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisSetStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisSetStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TennisSetStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TennisSetStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TennisSetStat->del($id)) {
			$this->Session->setFlash(__('TennisSetStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>