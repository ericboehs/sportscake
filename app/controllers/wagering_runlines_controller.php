<?php
class WageringRunlinesController extends AppController {

	var $name = 'WageringRunlines';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->WageringRunline->recursive = 0;
		$this->set('wageringRunlines', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid WageringRunline.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wageringRunline', $this->WageringRunline->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WageringRunline->create();
			if ($this->WageringRunline->save($this->data)) {
				$this->Session->setFlash(__('The WageringRunline has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringRunline could not be saved. Please, try again.', true));
			}
		}
		$bookmakers = $this->WageringRunline->Bookmaker->find('list');
		$events = $this->WageringRunline->Event->find('list');
		$teams = $this->WageringRunline->Team->find('list');
		$people = $this->WageringRunline->Person->find('list');
		$this->set(compact('bookmakers', 'events', 'teams', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid WageringRunline', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->WageringRunline->save($this->data)) {
				$this->Session->setFlash(__('The WageringRunline has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The WageringRunline could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WageringRunline->read(null, $id);
		}
		$bookmakers = $this->WageringRunline->Bookmaker->find('list');
		$events = $this->WageringRunline->Event->find('list');
		$teams = $this->WageringRunline->Team->find('list');
		$people = $this->WageringRunline->Person->find('list');
		$this->set(compact('bookmakers','events','teams','people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for WageringRunline', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WageringRunline->del($id)) {
			$this->Session->setFlash(__('WageringRunline deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>