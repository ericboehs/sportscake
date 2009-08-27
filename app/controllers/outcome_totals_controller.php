<?php
class OutcomeTotalsController extends AppController {

	var $name = 'OutcomeTotals';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->OutcomeTotal->recursive = 0;
		$this->set('outcomeTotals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid OutcomeTotal.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('outcomeTotal', $this->OutcomeTotal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->OutcomeTotal->create();
			if ($this->OutcomeTotal->save($this->data)) {
				$this->Session->setFlash(__('The OutcomeTotal has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The OutcomeTotal could not be saved. Please, try again.', true));
			}
		}
		$standingSubgroups = $this->OutcomeTotal->StandingSubgroup->find('list');
		$outcomeHolders = $this->OutcomeTotal->OutcomeHolder->find('list');
		$this->set(compact('standingSubgroups', 'outcomeHolders'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid OutcomeTotal', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->OutcomeTotal->save($this->data)) {
				$this->Session->setFlash(__('The OutcomeTotal has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The OutcomeTotal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OutcomeTotal->read(null, $id);
		}
		$standingSubgroups = $this->OutcomeTotal->StandingSubgroup->find('list');
		$outcomeHolders = $this->OutcomeTotal->OutcomeHolder->find('list');
		$this->set(compact('standingSubgroups','outcomeHolders'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for OutcomeTotal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OutcomeTotal->del($id)) {
			$this->Session->setFlash(__('OutcomeTotal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>