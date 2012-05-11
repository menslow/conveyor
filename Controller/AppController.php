<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
		)
	);

	function beforeFilter() {
		// allow access to all index and view actions
		$this->Auth->allow('index', 'view');

		$this->set('auth_user', $this->Auth->User());

	}
}