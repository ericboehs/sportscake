<?php
class MediaKeywordsController extends AppController {

	var $name = 'MediaKeywords';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MediaKeyword->recursive = 0;
		$this->set('mediaKeywords', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MediaKeyword.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('mediaKeyword', $this->MediaKeyword->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MediaKeyword->create();
			if ($this->MediaKeyword->save($this->data)) {
				$this->Session->setFlash(__('The MediaKeyword has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MediaKeyword could not be saved. Please, try again.', true));
			}
		}
		$media = $this->MediaKeyword->Media->find('list');
		$this->set(compact('media'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MediaKeyword', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MediaKeyword->save($this->data)) {
				$this->Session->setFlash(__('The MediaKeyword has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MediaKeyword could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MediaKeyword->read(null, $id);
		}
		$media = $this->MediaKeyword->Media->find('list');
		$this->set(compact('media'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MediaKeyword', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MediaKeyword->del($id)) {
			$this->Session->setFlash(__('MediaKeyword deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>