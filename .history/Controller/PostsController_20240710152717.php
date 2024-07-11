<?php

/**
 * @property Post $Post
 */
class PostsController extends AppController
{
    public function index()
    {
        $this->set('posts', $this->Post->find('all'));
    }
}
