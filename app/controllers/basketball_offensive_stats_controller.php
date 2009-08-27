<?php
class BasketballOffensiveStatsController extends AppController {

	var $name = 'BasketballOffensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BasketballOffensiveStat->recursive = 0;
		$this->set('basketballOffensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BasketballOffensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('basketballOffensiveStat', $this->BasketballOffensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BasketballOffensiveStat->create();
			if ($this->BasketballOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballOffensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BasketballOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BasketballOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballOffensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BasketballOffensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BasketballOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BasketballOffensiveStat->del($id)) {
			$this->Session->setFlash(__('BasketballOffensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>