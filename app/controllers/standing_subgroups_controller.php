<?php
class StandingSubgroupsController extends AppController {

	var $name = 'StandingSubgroups';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->StandingSubgroup->recursive = 0;
		$this->set('standingSubgroups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid StandingSubgroup.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('standingSubgroup', $this->StandingSubgroup->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StandingSubgroup->create();
			if ($this->StandingSubgroup->save($this->data)) {
				$this->Session->setFlash(__('The StandingSubgroup has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The StandingSubgroup could not be saved. Please, try again.', true));
			}
		}
		$standings = $this->StandingSubgroup->Standing->find('list');
		$affiliations = $this->StandingSubgroup->Affiliation->find('list');
		$this->set(compact('standings', 'affiliations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid StandingSubgroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->StandingSubgroup->save($this->data)) {
				$this->Session->setFlash(__('The StandingSubgroup has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The StandingSubgroup could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StandingSubgroup->read(null, $id);
		}
		$standings = $this->StandingSubgroup->Standing->find('list');
		$affiliations = $this->StandingSubgroup->Affiliation->find('list');
		$this->set(compact('standings','affiliations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for StandingSubgroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StandingSubgroup->del($id)) {
			$this->Session->setFlash(__('StandingSubgroup deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>