<?php
class AmericanFootballDownProgressStatsController extends AppController {

	var $name = 'AmericanFootballDownProgressStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballDownProgressStat->recursive = 0;
		$this->set('americanFootballDownProgressStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballDownProgressStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballDownProgressStat', $this->AmericanFootballDownProgressStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballDownProgressStat->create();
			if ($this->AmericanFootballDownProgressStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballDownProgressStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballDownProgressStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballDownProgressStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballDownProgressStat->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballDownProgressStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballDownProgressStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballDownProgressStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballDownProgressStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballDownProgressStat->del($id)) {
			$this->Session->setFlash(__('AmericanFootballDownProgressStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>