<?php
class AmericanFootballPenaltiesStatsController extends AppController {

	var $name = 'AmericanFootballPenaltiesStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballPenaltiesStat->recursive = 0;
		$this->set('americanFootballPenaltiesStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballPenaltiesStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballPenaltiesStat', $this->AmericanFootballPenaltiesStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballPenaltiesStat->create();
			if ($this->AmericanFootballPenaltiesStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballPenaltiesStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballPenaltiesStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballPenaltiesStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballPenaltiesStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballPenaltiesStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballPenaltiesStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballPenaltiesStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballPenaltiesStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballPenaltiesStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballPenaltiesStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>