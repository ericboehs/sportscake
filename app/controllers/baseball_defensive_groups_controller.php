<?php
class BaseballDefensiveGroupsController extends AppController {

	var $name = 'BaseballDefensiveGroups';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballDefensiveGroup->recursive = 0;
		$this->set('baseballDefensiveGroups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballDefensiveGroup.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballDefensiveGroup', $this->BaseballDefensiveGroup->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballDefensiveGroup->create();
			if ($this->BaseballDefensiveGroup->save($this->data)) {
				$this->Session->setFlash(__('The BaseballDefensiveGroup has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballDefensiveGroup could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballDefensiveGroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballDefensiveGroup->save($this->data)) {
				$this->Session->setFlash(__('The BaseballDefensiveGroup has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballDefensiveGroup could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballDefensiveGroup->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballDefensiveGroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballDefensiveGroup->del($id)) {
			$this->Session->setFlash(__('BaseballDefensiveGroup deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>