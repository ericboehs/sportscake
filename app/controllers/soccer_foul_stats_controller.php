<?php
class SoccerFoulStatsController extends AppController {

	var $name = 'SoccerFoulStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SoccerFoulStat->recursive = 0;
		$this->set('soccerFoulStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SoccerFoulStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('soccerFoulStat', $this->SoccerFoulStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SoccerFoulStat->create();
			if ($this->SoccerFoulStat->save($this->data)) {
				$this->Session->setFlash(__('The SoccerFoulStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerFoulStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SoccerFoulStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SoccerFoulStat->save($this->data)) {
				$this->Session->setFlash(__('The SoccerFoulStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SoccerFoulStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SoccerFoulStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SoccerFoulStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SoccerFoulStat->del($id)) {
			$this->Session->setFlash(__('SoccerFoulStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>