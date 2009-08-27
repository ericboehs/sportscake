<?php
class CoreStatsController extends AppController {

	var $name = 'CoreStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->CoreStat->recursive = 0;
		$this->set('coreStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid CoreStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('coreStat', $this->CoreStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CoreStat->create();
			if ($this->CoreStat->save($this->data)) {
				$this->Session->setFlash(__('The CoreStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The CoreStat could not be saved. Please, try again.', true));
			}
		}
		$positions = $this->CoreStat->Position->find('list');
		$this->set(compact('positions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid CoreStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->CoreStat->save($this->data)) {
				$this->Session->setFlash(__('The CoreStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The CoreStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CoreStat->read(null, $id);
		}
		$positions = $this->CoreStat->Position->find('list');
		$this->set(compact('positions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for CoreStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CoreStat->del($id)) {
			$this->Session->setFlash(__('CoreStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>