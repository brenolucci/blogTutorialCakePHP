<?php

/**
 * @property Post $Post
 */
class PostsController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {
        pr($this->Post->find('list', [
            'fields' => ['title', 'description']
        ]));
        die;
        $this->set('posts', $this->Post->find('all'));
    }
}
