<?php
class BaseballEventStatesController extends AppController {

	var $name = 'BaseballEventStates';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->BaseballEventState->recursive = 0;
		$this->set('baseballEventStates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid BaseballEventState.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('baseballEventState', $this->BaseballEventState->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseballEventState->create();
			if ($this->BaseballEventState->save($this->data)) {
				$this->Session->setFlash(__('The BaseballEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballEventState could not be saved. Please, try again.', true));
			}
		}
		$events = $this->BaseballEventState->Event->find('list');
		$runnerOnFirsts = $this->BaseballEventState->RunnerOnFirst->find('list');
		$runnerOnSeconds = $this->BaseballEventState->RunnerOnSecond->find('list');
		$runnerOnThirds = $this->BaseballEventState->RunnerOnThird->find('list');
		$pitchers = $this->BaseballEventState->Pitcher->find('list');
		$batters = $this->BaseballEventState->Batter->find('list');
		$this->set(compact('events', 'runnerOnFirsts', 'runnerOnSeconds', 'runnerOnThirds', 'pitchers', 'batters'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid BaseballEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseballEventState->save($this->data)) {
				$this->Session->setFlash(__('The BaseballEventState has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The BaseballEventState could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseballEventState->read(null, $id);
		}
		$events = $this->BaseballEventState->Event->find('list');
		$runnerOnFirsts = $this->BaseballEventState->RunnerOnFirst->find('list');
		$runnerOnSeconds = $this->BaseballEventState->RunnerOnSecond->find('list');
		$runnerOnThirds = $this->BaseballEventState->RunnerOnThird->find('list');
		$pitchers = $this->BaseballEventState->Pitcher->find('list');
		$batters = $this->BaseballEventState->Batter->find('list');
		$this->set(compact('events','runnerOnFirsts','runnerOnSeconds','runnerOnThirds','pitchers','batters'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for BaseballEventState', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseballEventState->del($id)) {
			$this->Session->setFlash(__('BaseballEventState deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>