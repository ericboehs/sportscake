<?php
class DocumentsMediaController extends AppController {

	var $name = 'DocumentsMedia';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DocumentsMedium->recursive = 0;
		$this->set('documentsMedia', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DocumentsMedium.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('documentsMedium', $this->DocumentsMedium->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocumentsMedium->create();
			if ($this->DocumentsMedium->save($this->data)) {
				$this->Session->setFlash(__('The DocumentsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentsMedium could not be saved. Please, try again.', true));
			}
		}
		$documents = $this->DocumentsMedium->Document->find('list');
		$media = $this->DocumentsMedium->Media->find('list');
		$mediaCaptions = $this->DocumentsMedium->MediaCaption->find('list');
		$this->set(compact('documents', 'media', 'mediaCaptions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DocumentsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocumentsMedium->save($this->data)) {
				$this->Session->setFlash(__('The DocumentsMedium has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DocumentsMedium could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocumentsMedium->read(null, $id);
		}
		$documents = $this->DocumentsMedium->Document->find('list');
		$media = $this->DocumentsMedium->Media->find('list');
		$mediaCaptions = $this->DocumentsMedium->MediaCaption->find('list');
		$this->set(compact('documents','media','mediaCaptions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DocumentsMedium', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocumentsMedium->del($id)) {
			$this->Session->setFlash(__('DocumentsMedium deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>