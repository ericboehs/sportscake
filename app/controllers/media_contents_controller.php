<?php
class MediaContentsController extends AppController {

	var $name = 'MediaContents';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MediaContent->recursive = 0;
		$this->set('mediaContents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MediaContent.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('mediaContent', $this->MediaContent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MediaContent->create();
			if ($this->MediaContent->save($this->data)) {
				$this->Session->setFlash(__('The MediaContent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MediaContent could not be saved. Please, try again.', true));
			}
		}
		$media = $this->MediaContent->Media->find('list');
		$this->set(compact('media'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MediaContent', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MediaContent->save($this->data)) {
				$this->Session->setFlash(__('The MediaContent has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MediaContent could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MediaContent->read(null, $id);
		}
		$media = $this->MediaContent->Media->find('list');
		$this->set(compact('media'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MediaContent', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MediaContent->del($id)) {
			$this->Session->setFlash(__('MediaContent deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>