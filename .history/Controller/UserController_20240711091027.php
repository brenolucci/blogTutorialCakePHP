<?php
App::uses('AppController', 'Controller');

class UserController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index()
    {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
}