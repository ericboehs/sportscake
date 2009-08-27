<?php
class AmericanFootballFumblesStatsController extends AppController {

	var $name = 'AmericanFootballFumblesStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballFumblesStat->recursive = 0;
		$this->set('americanFootballFumblesStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballFumblesStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballFumblesStat', $this->AmericanFootballFumblesStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballFumblesStat->create();
			if ($this->AmericanFootballFumblesStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballFumblesStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballFumblesStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballFumblesStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballFumblesStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballFumblesStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballFumblesStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballFumblesStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballFumblesStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballFumblesStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballFumblesStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>