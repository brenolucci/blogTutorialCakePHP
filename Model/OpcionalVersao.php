<?php

class OpcionalVersao extends AppModel
{
    public $name = 'OpcionalVersao';
    public $primaryKey = 'id';

    public $belongsTo = [
        'Versao' => [
            'className' => 'Versao',
            'foreignKey' => 'versao_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => []
        ],
        'Opcional' => [
            'className' => 'Opcional',
            'foreignKey' => 'opcional_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => []
        ]
    ];

    public $validate = [
        'versao_id' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => __('Versão: preenchimento obrigatório!'),
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => __('Versão: apenas números inteiros positivos!')
            ],
        ],
        'opcional_id' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => __('Opcional: preenchimento obrigatório!'),
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => __('Opcional: apenas números inteiros positivos!')
            ],
        ],
    ];

    public function beforeValidate($options = [])
    {
        if (!empty($this->request->data[$this->alias]['versao_id'])) {
            $this->request->data[$this->alias]['versao_id'] = trim($this->request->data[$this->alias]['versao_id']);
        }

        if (!empty($this->request->data[$this->alias]['opcional_id'])) {
            $this->request->data[$this->alias]['opcional_id'] = trim($this->request->data[$this->alias]['opcional_id']);
        }

        return parent::beforeValidate($options);
    }
}
