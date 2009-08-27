<?php
class RankingsController extends AppController {

	var $name = 'Rankings';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Ranking->recursive = 0;
		$this->set('rankings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ranking.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ranking', $this->Ranking->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ranking->create();
			if ($this->Ranking->save($this->data)) {
				$this->Session->setFlash(__('The Ranking has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ranking could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Ranking', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ranking->save($this->data)) {
				$this->Session->setFlash(__('The Ranking has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ranking could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ranking->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Ranking', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ranking->del($id)) {
			$this->Session->setFlash(__('Ranking deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>