<?php
class WageringStraightSpreadLinesController extends AppController {

	var $name = 'WageringStraightSpreadLines';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->WageringStraightSpreadLine->recursive = 0;
		$this->set('wageringStraightSpreadLines', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WageringStraightSpreadLine.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wageringStraightSpreadLine', $this->WageringStraightSpreadLine->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WageringStraightSpreadLine->create();
			if ($this->WageringStraightSpreadLine->save($this->data)) {
				$this->Session->setFlash(__('The WageringStraightSpreadLine has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringStraightSpreadLine could not be saved. Please, try again.', true));
			}
		}
		$bookmakers = $this->WageringStraightSpreadLine->Bookmaker->find('list');
		$events = $this->WageringStraightSpreadLine->Event->find('list');
		$teams = $this->WageringStraightSpreadLine->Team->find('list');
		$people = $this->WageringStraightSpreadLine->Person->find('list');
		$this->set(compact('bookmakers', 'events', 'teams', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WageringStraightSpreadLine', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WageringStraightSpreadLine->save($this->data)) {
				$this->Session->setFlash(__('The WageringStraightSpreadLine has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringStraightSpreadLine could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WageringStraightSpreadLine->read(null, $id);
		}
		$bookmakers = $this->WageringStraightSpreadLine->Bookmaker->find('list');
		$events = $this->WageringStraightSpreadLine->Event->find('list');
		$teams = $this->WageringStraightSpreadLine->Team->find('list');
		$people = $this->WageringStraightSpreadLine->Person->find('list');
		$this->set(compact('bookmakers','events','teams','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WageringStraightSpreadLine', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WageringStraightSpreadLine->del($id)) {
			$this->Session->setFlash(__('WageringStraightSpreadLine deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>