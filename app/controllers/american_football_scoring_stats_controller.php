<?php
class AmericanFootballScoringStatsController extends AppController {

	var $name = 'AmericanFootballScoringStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballScoringStat->recursive = 0;
		$this->set('americanFootballScoringStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballScoringStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballScoringStat', $this->AmericanFootballScoringStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballScoringStat->create();
			if ($this->AmericanFootballScoringStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballScoringStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballScoringStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballScoringStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballScoringStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballScoringStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballScoringStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballScoringStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballScoringStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballScoringStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballScoringStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>