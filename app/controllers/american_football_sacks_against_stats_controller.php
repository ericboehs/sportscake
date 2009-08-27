<?php
class AmericanFootballSacksAgainstStatsController extends AppController {

	var $name = 'AmericanFootballSacksAgainstStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballSacksAgainstStat->recursive = 0;
		$this->set('americanFootballSacksAgainstStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballSacksAgainstStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballSacksAgainstStat', $this->AmericanFootballSacksAgainstStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballSacksAgainstStat->create();
			if ($this->AmericanFootballSacksAgainstStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballSacksAgainstStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballSacksAgainstStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballSacksAgainstStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballSacksAgainstStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballSacksAgainstStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballSacksAgainstStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballSacksAgainstStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballSacksAgainstStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballSacksAgainstStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballSacksAgainstStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>