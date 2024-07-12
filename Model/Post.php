<?php

class Post extends AppModel
{
    public $primaryKey = 'id';
    public $displayField = 'title';

    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    public function isOwnedBy($post, $user)
    {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }

    public function totalPosts()
    {
        return $this->find('count');
    }
}