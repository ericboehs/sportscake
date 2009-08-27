<?php
class MediaCaptionsController extends AppController {

	var $name = 'MediaCaptions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->MediaCaption->recursive = 0;
		$this->set('mediaCaptions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid MediaCaption.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('mediaCaption', $this->MediaCaption->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MediaCaption->create();
			if ($this->MediaCaption->save($this->data)) {
				$this->Session->setFlash(__('The MediaCaption has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MediaCaption could not be saved. Please, try again.', true));
			}
		}
		$media = $this->MediaCaption->Media->find('list');
		$captionAuthors = $this->MediaCaption->CaptionAuthor->find('list');
		$this->set(compact('media', 'captionAuthors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid MediaCaption', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->MediaCaption->save($this->data)) {
				$this->Session->setFlash(__('The MediaCaption has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The MediaCaption could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MediaCaption->read(null, $id);
		}
		$media = $this->MediaCaption->Media->find('list');
		$captionAuthors = $this->MediaCaption->CaptionAuthor->find('list');
		$this->set(compact('media','captionAuthors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for MediaCaption', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MediaCaption->del($id)) {
			$this->Session->setFlash(__('MediaCaption deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>