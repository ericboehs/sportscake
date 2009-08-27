<?php
class WageringTotalScoreLinesController extends AppController {

	var $name = 'WageringTotalScoreLines';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->WageringTotalScoreLine->recursive = 0;
		$this->set('wageringTotalScoreLines', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WageringTotalScoreLine.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wageringTotalScoreLine', $this->WageringTotalScoreLine->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WageringTotalScoreLine->create();
			if ($this->WageringTotalScoreLine->save($this->data)) {
				$this->Session->setFlash(__('The WageringTotalScoreLine has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringTotalScoreLine could not be saved. Please, try again.', true));
			}
		}
		$bookmakers = $this->WageringTotalScoreLine->Bookmaker->find('list');
		$events = $this->WageringTotalScoreLine->Event->find('list');
		$teams = $this->WageringTotalScoreLine->Team->find('list');
		$people = $this->WageringTotalScoreLine->Person->find('list');
		$this->set(compact('bookmakers', 'events', 'teams', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WageringTotalScoreLine', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WageringTotalScoreLine->save($this->data)) {
				$this->Session->setFlash(__('The WageringTotalScoreLine has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringTotalScoreLine could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WageringTotalScoreLine->read(null, $id);
		}
		$bookmakers = $this->WageringTotalScoreLine->Bookmaker->find('list');
		$events = $this->WageringTotalScoreLine->Event->find('list');
		$teams = $this->WageringTotalScoreLine->Team->find('list');
		$people = $this->WageringTotalScoreLine->Person->find('list');
		$this->set(compact('bookmakers','events','teams','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WageringTotalScoreLine', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WageringTotalScoreLine->del($id)) {
			$this->Session->setFlash(__('WageringTotalScoreLine deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>