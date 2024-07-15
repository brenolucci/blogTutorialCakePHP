<?php

class Opcional extends AppModel
{
    public $name = 'Opcional';
    public $primaryKey = 'id';

    public $displayField = 'nome';

    public $hasMany = [
        'OpcionalVersao' => [
            'className' => 'OpcionalVersao',
            'foreignKey' => 'opcional_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => []
        ]
    ];

    public $validate = [
        'nome' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => __('Nome: preenchimento obrigatório!'),
            ],
            'maxlength' => [
                'rule' => ['maxlength', 100],
                'message' => __('Nome: deve conter no máximo %d caracteres!'),
            ],
            'isUnique' => [
                'rule' => 'isUnique',
                'message' => 'Nome: opcional já registrado!'
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
