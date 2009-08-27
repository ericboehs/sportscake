<?php
class BasketballReboundingStatsController extends AppController {

	var $name = 'BasketballReboundingStats';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BasketballReboundingStat->recursive = 0;
		$this->set('basketballReboundingStats', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BasketballReboundingStat.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('basketballReboundingStat', $this->BasketballReboundingStat->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BasketballReboundingStat->create();
			if ($this->BasketballReboundingStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballReboundingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballReboundingStat could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BasketballReboundingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BasketballReboundingStat->save($this->data)) {
				$this->Session->setFlash(__('The BasketballReboundingStat has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BasketballReboundingStat could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BasketballReboundingStat->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BasketballReboundingStat', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BasketballReboundingStat->del($id)) {
			$this->Session->setFlash(__('BasketballReboundingStat deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>