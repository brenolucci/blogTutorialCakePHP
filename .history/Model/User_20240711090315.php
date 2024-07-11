<?php

App::uses('AppModel', 'Model');

class User extends AppModel
{
    public $validade = array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        )
    );
}