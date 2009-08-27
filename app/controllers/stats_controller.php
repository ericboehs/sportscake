<?php
class StatsController extends AppController {

	var $name = 'Stats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Stat->recursive = 0;
		$this->set('stats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Stat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('stat', $this->Stat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Stat->create();
			if ($this->Stat->save($this->data)) {
				$this->Session->setFlash(__('The Stat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Stat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Stat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Stat->save($this->data)) {
				$this->Session->setFlash(__('The Stat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Stat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Stat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Stat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Stat->del($id)) {
			$this->Session->setFlash(__('Stat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>