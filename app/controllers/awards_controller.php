<?php
class AwardsController extends AppController {

	var $name = 'Awards';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Award->recursive = 0;
		$this->set('awards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Award.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('award', $this->Award->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Award->create();
			if ($this->Award->save($this->data)) {
				$this->Session->setFlash(__('The Award has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Award could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Award', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Award->save($this->data)) {
				$this->Session->setFlash(__('The Award has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Award could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Award->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Award', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Award->del($id)) {
			$this->Session->setFlash(__('Award deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>