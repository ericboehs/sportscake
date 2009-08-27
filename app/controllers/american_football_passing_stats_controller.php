<?php
class AmericanFootballPassingStatsController extends AppController {

	var $name = 'AmericanFootballPassingStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballPassingStat->recursive = 0;
		$this->set('americanFootballPassingStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballPassingStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballPassingStat', $this->AmericanFootballPassingStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballPassingStat->create();
			if ($this->AmericanFootballPassingStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballPassingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballPassingStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballPassingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballPassingStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballPassingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballPassingStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballPassingStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballPassingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballPassingStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballPassingStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>