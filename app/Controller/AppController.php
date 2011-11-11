<?php

/**
 * App Controller
 *
 * @property App $App
 */
class AppController extends Controller {
    public $components = array(
        'Acl',
        'Auth',
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');

    /**
     * beforeFilter method
     *
     * @return void
     */
    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');

        $this->Auth->actionPath = 'controllers'; // Ważne określenie ścieżki działania dla ACL

        $this->Auth->allow('display');
    }
}