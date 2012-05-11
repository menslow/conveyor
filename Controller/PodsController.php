<?php
class PodsController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->Pod->recursive = 0;
		$this->set('pods', $this->paginate());
	}

	public function view($id = null) {
		$this->Pod->id = $id;
		if (!$this->Pod->exists()) {
			throw new NotFoundException(__('Invalid pod'));
		}
		$this->set('pod', $this->Pod->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Pod->create();
			if ($this->Pod->save($this->request->data)) {
				$this->Session->setFlash(__('The pod has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pod could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this->Pod->id = $id;
		if (!$this->Pod->exists()) {
			throw new NotFoundException(__('Invalid pod'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pod->save($this->request->data)) {
				$this->Session->setFlash(__('The pod has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pod could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Pod->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Pod->id = $id;
		if (!$this->Pod->exists()) {
			throw new NotFoundException(__('Invalid pod'));
		}
		if ($this->Pod->delete()) {
			$this->Session->setFlash(__('Pod deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pod was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}