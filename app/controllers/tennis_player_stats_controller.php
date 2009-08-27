<?php
class TennisPlayerStatsController extends AppController {

	var $name = 'TennisPlayerStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TennisPlayerStat->recursive = 0;
		$this->set('tennisPlayerStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TennisPlayerStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tennisPlayerStat', $this->TennisPlayerStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TennisPlayerStat->create();
			if ($this->TennisPlayerStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisPlayerStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisPlayerStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TennisPlayerStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TennisPlayerStat->save($this->data)) {
				$this->Session->setFlash(__('The TennisPlayerStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TennisPlayerStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TennisPlayerStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TennisPlayerStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TennisPlayerStat->del($id)) {
			$this->Session->setFlash(__('TennisPlayerStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>