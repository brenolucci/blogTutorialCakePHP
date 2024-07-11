<?php

/**
 * @property Post $Post
 */
class PostsController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {
        Configure::write('debug', 2);

        $this->set('posts', $this->Post->find('all'));
    }
}
