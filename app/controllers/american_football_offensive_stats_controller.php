<?php
class AmericanFootballOffensiveStatsController extends AppController {

	var $name = 'AmericanFootballOffensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballOffensiveStat->recursive = 0;
		$this->set('americanFootballOffensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballOffensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballOffensiveStat', $this->AmericanFootballOffensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballOffensiveStat->create();
			if ($this->AmericanFootballOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballOffensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballOffensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballOffensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballOffensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballOffensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballOffensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballOffensiveStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballOffensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>