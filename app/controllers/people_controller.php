<?php
class PeopleController extends AppController {

	var $name = 'People';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Person->recursive = 0;
		$this->set('people', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Person.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('person', $this->Person->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Person->create();
			if ($this->Person->save($this->data)) {
				$this->Session->setFlash(__('The Person has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Person could not be saved. Please, try again.', true));
			}
		}
		$documents = $this->Person->Document->find('list');
		$media = $this->Person->Media->find('list');
		$publishers = $this->Person->Publisher->find('list');
		$birthLocations = $this->Person->BirthLocation->find('list');
		$hometownLocations = $this->Person->HometownLocation->find('list');
		$residenceLocations = $this->Person->ResidenceLocation->find('list');
		$deathLocations = $this->Person->DeathLocation->find('list');
		$this->set(compact('documents', 'media', 'publishers', 'birthLocations', 'hometownLocations', 'residenceLocations', 'deathLocations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Person', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Person->save($this->data)) {
				$this->Session->setFlash(__('The Person has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Person could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Person->read(null, $id);
		}
		$documents = $this->Person->Document->find('list');
		$media = $this->Person->Media->find('list');
		$publishers = $this->Person->Publisher->find('list');
		$birthLocations = $this->Person->BirthLocation->find('list');
		$hometownLocations = $this->Person->HometownLocation->find('list');
		$residenceLocations = $this->Person->ResidenceLocation->find('list');
		$deathLocations = $this->Person->DeathLocation->find('list');
		$this->set(compact('documents','media','publishers','birthLocations','hometownLocations','residenceLocations','deathLocations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Person', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Person->del($id)) {
			$this->Session->setFlash(__('Person deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>