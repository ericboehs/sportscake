<?php
class BookmakersController extends AppController {

	var $name = 'Bookmakers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Bookmaker->recursive = 0;
		$this->set('bookmakers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Bookmaker.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('bookmaker', $this->Bookmaker->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Bookmaker->create();
			if ($this->Bookmaker->save($this->data)) {
				$this->Session->setFlash(__('The Bookmaker has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Bookmaker could not be saved. Please, try again.', true));
			}
		}
		$publishers = $this->Bookmaker->Publisher->find('list');
		$locations = $this->Bookmaker->Location->find('list');
		$this->set(compact('publishers', 'locations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Bookmaker', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bookmaker->save($this->data)) {
				$this->Session->setFlash(__('The Bookmaker has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Bookmaker could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bookmaker->read(null, $id);
		}
		$publishers = $this->Bookmaker->Publisher->find('list');
		$locations = $this->Bookmaker->Location->find('list');
		$this->set(compact('publishers','locations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Bookmaker', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bookmaker->del($id)) {
			$this->Session->setFlash(__('Bookmaker deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>