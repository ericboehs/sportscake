<?php
class BasketballDefensiveStatsController extends AppController {

	var $name = 'BasketballDefensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BasketballDefensiveStat->recursive = 0;
		$this->set('basketballDefensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BasketballDefensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('basketballDefensiveStat', $this->BasketballDefensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BasketballDefensiveStat->create();
			if ($this->BasketballDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballDefensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BasketballDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BasketballDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballDefensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BasketballDefensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BasketballDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BasketballDefensiveStat->del($id)) {
			$this->Session->setFlash(__('BasketballDefensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>