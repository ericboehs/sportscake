<?php
class MediaController extends AppController {

	var $name = 'Media';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Media->recursive = 0;
		$this->set('media', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Media.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('media', $this->Media->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Media->create();
			if ($this->Media->save($this->data)) {
				$this->Session->setFlash(__('The Media has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Media could not be saved. Please, try again.', true));
			}
		}
		$affiliations = $this->Media->Affiliation->find('list');
		$documents = $this->Media->Document->find('list');
		$events = $this->Media->Event->find('list');
		$people = $this->Media->Person->find('list');
		$teams = $this->Media->Team->find('list');
		$publishers = $this->Media->Publisher->find('list');
		$credits = $this->Media->Credit->find('list');
		$creationLocations = $this->Media->CreationLocation->find('list');
		$this->set(compact('affiliations', 'documents', 'events', 'people', 'teams', 'publishers', 'credits', 'creationLocations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Media', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Media->save($this->data)) {
				$this->Session->setFlash(__('The Media has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Media could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Media->read(null, $id);
		}
		$affiliations = $this->Media->Affiliation->find('list');
		$documents = $this->Media->Document->find('list');
		$events = $this->Media->Event->find('list');
		$people = $this->Media->Person->find('list');
		$teams = $this->Media->Team->find('list');
		$publishers = $this->Media->Publisher->find('list');
		$credits = $this->Media->Credit->find('list');
		$creationLocations = $this->Media->CreationLocation->find('list');
		$this->set(compact('affiliations','documents','events','people','teams','publishers','credits','creationLocations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Media', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Media->del($id)) {
			$this->Session->setFlash(__('Media deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>