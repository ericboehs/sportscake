<?php
class AmericanFootballDefensiveStatsController extends AppController {

	var $name = 'AmericanFootballDefensiveStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballDefensiveStat->recursive = 0;
		$this->set('americanFootballDefensiveStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballDefensiveStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballDefensiveStat', $this->AmericanFootballDefensiveStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballDefensiveStat->create();
			if ($this->AmericanFootballDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballDefensiveStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballDefensiveStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballDefensiveStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballDefensiveStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballDefensiveStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballDefensiveStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballDefensiveStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballDefensiveStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>