<?php
App::uses('AppController', 'Controller');

class UserController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }


}