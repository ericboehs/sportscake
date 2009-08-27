<?php
class TeamsMediaController extends AppController {

	var $name = 'TeamsMedia';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TeamsMedium->recursive = 0;
		$this->set('teamsMedia', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TeamsMedium.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('teamsMedium', $this->TeamsMedium->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TeamsMedium->create();
			if ($this->TeamsMedium->save($this->data)) {
				$this->Session->setFlash(__('The TeamsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TeamsMedium could not be saved. Please, try again.', true));
			}
		}
		$teams = $this->TeamsMedium->Team->find('list');
		$media = $this->TeamsMedium->Media->find('list');
		$this->set(compact('teams', 'media'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TeamsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TeamsMedium->save($this->data)) {
				$this->Session->setFlash(__('The TeamsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TeamsMedium could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TeamsMedium->read(null, $id);
		}
		$teams = $this->TeamsMedium->Team->find('list');
		$media = $this->TeamsMedium->Media->find('list');
		$this->set(compact('teams','media'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TeamsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TeamsMedium->del($id)) {
			$this->Session->setFlash(__('TeamsMedium deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>