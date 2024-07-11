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
}