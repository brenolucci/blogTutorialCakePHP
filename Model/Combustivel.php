<?php

class Combustivel extends AppModel
{
    public $name = 'Combustivel';

    public $useTable = 'combustiveis';
    public $primaryKey = 'id';

    public $displayField = 'nome';

    public $hasMany = [
        'Versoes' => [
            'className' => 'Versao',
            'foreingKey' => 'combustivel_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => []
        ]
    ];

    public $validate = [
        'nome' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Nome: preenchimento obrigatório!',
            ],
            'maxlength' => [
                'rule' => ['maxlength', 100],
                'message' => 'Nome: deve conter no máximo %d caracteres!',
            ],
            'isUnique' => [
                'rule' => 'isUnique',
                'message' => 'Nome: combustível já registrado!'
            ],
        ],
    ];

    public function beforeValidate($options = [])
    {
        if (!empty($this->request->data[$this->alias]['nome'])) {
            $this->request->data[$this->alias]['nome'] = trim($this->request->data[$this->alias]['nome']);
        }

        return parent::beforeValidate($options);
    }
}
