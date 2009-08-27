<?php
class AmericanFootballRushingStatsController extends AppController {

	var $name = 'AmericanFootballRushingStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballRushingStat->recursive = 0;
		$this->set('americanFootballRushingStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballRushingStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballRushingStat', $this->AmericanFootballRushingStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballRushingStat->create();
			if ($this->AmericanFootballRushingStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballRushingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballRushingStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballRushingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballRushingStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballRushingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballRushingStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballRushingStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballRushingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballRushingStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballRushingStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>