<?php
class AmericanFootballActionPlaysController extends AppController {

	var $name = 'AmericanFootballActionPlays';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AmericanFootballActionPlay->recursive = 0;
		$this->set('americanFootballActionPlays', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AmericanFootballActionPlay.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('americanFootballActionPlay', $this->AmericanFootballActionPlay->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AmericanFootballActionPlay->create();
			if ($this->AmericanFootballActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballActionPlay could not be saved. Please, try again.', true));
			}
		}
		$americanFootballEventStates = $this->AmericanFootballActionPlay->AmericanFootballEventState->find('list');
		$this->set(compact('americanFootballEventStates'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AmericanFootballActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmericanFootballActionPlay->save($this->data)) {
				$this->Session->setFlash(__('The AmericanFootballActionPlay has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AmericanFootballActionPlay could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmericanFootballActionPlay->read(null, $id);
		}
		$americanFootballEventStates = $this->AmericanFootballActionPlay->AmericanFootballEventState->find('list');
		$this->set(compact('americanFootballEventStates'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AmericanFootballActionPlay', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmericanFootballActionPlay->del($id)) {
			$this->Session->setFlash(__('AmericanFootballActionPlay deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>