<?php
class WageringOddsLinesController extends AppController {

	var $name = 'WageringOddsLines';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->WageringOddsLine->recursive = 0;
		$this->set('wageringOddsLines', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WageringOddsLine.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wageringOddsLine', $this->WageringOddsLine->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WageringOddsLine->create();
			if ($this->WageringOddsLine->save($this->data)) {
				$this->Session->setFlash(__('The WageringOddsLine has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringOddsLine could not be saved. Please, try again.', true));
			}
		}
		$bookmakers = $this->WageringOddsLine->Bookmaker->find('list');
		$events = $this->WageringOddsLine->Event->find('list');
		$teams = $this->WageringOddsLine->Team->find('list');
		$people = $this->WageringOddsLine->Person->find('list');
		$this->set(compact('bookmakers', 'events', 'teams', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WageringOddsLine', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WageringOddsLine->save($this->data)) {
				$this->Session->setFlash(__('The WageringOddsLine has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringOddsLine could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WageringOddsLine->read(null, $id);
		}
		$bookmakers = $this->WageringOddsLine->Bookmaker->find('list');
		$events = $this->WageringOddsLine->Event->find('list');
		$teams = $this->WageringOddsLine->Team->find('list');
		$people = $this->WageringOddsLine->Person->find('list');
		$this->set(compact('bookmakers','events','teams','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WageringOddsLine', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WageringOddsLine->del($id)) {
			$this->Session->setFlash(__('WageringOddsLine deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>