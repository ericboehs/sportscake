<?php
class WageringMoneylinesController extends AppController {

	var $name = 'WageringMoneylines';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->WageringMoneyline->recursive = 0;
		$this->set('wageringMoneylines', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WageringMoneyline.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wageringMoneyline', $this->WageringMoneyline->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WageringMoneyline->create();
			if ($this->WageringMoneyline->save($this->data)) {
				$this->Session->setFlash(__('The WageringMoneyline has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringMoneyline could not be saved. Please, try again.', true));
			}
		}
		$bookmakers = $this->WageringMoneyline->Bookmaker->find('list');
		$events = $this->WageringMoneyline->Event->find('list');
		$teams = $this->WageringMoneyline->Team->find('list');
		$people = $this->WageringMoneyline->Person->find('list');
		$this->set(compact('bookmakers', 'events', 'teams', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WageringMoneyline', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WageringMoneyline->save($this->data)) {
				$this->Session->setFlash(__('The WageringMoneyline has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringMoneyline could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WageringMoneyline->read(null, $id);
		}
		$bookmakers = $this->WageringMoneyline->Bookmaker->find('list');
		$events = $this->WageringMoneyline->Event->find('list');
		$teams = $this->WageringMoneyline->Team->find('list');
		$people = $this->WageringMoneyline->Person->find('list');
		$this->set(compact('bookmakers','events','teams','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WageringMoneyline', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WageringMoneyline->del($id)) {
			$this->Session->setFlash(__('WageringMoneyline deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>