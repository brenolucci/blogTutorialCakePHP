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

    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundExeption(__('Invalid post'));
        }
    }
}
