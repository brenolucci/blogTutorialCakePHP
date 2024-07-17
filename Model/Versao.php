<?php

class Versao extends AppModel
{
    public $name = 'Versao';
    public $useTable = 'versoes';
    public $primaryKey = 'id';

    public $displayField = 'nome';

    public $belongsTo = [
        'Modelo' => [
            'className' => 'Modelo',
            'foreignKey' => 'modelo_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => [],
        ],
        'Combustivel' => [
            'className' => 'Combustivel',
            'foreignKey' => 'combustivel_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => [],
        ],
    ];

    public $hasMany = [
        'Imagem' => [
            'className' => 'Imagem',
            'foreignKey' => 'versao_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => [],
            'dependent' => true,
        ],
        'OpcionalVersao' => [
            'className' => 'OpcionalVersao',
            'foreignKey' => 'versao_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => [],
            'dependent' => true,
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
        ],
        'modelo_id' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Modelo: preenchimento obrigatório!',
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => 'Modelo: apenas números inteiros positivos!'
            ],
        ],
        'combustivel_id' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Combustível: preenchimento obrigatório!',
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => 'Combustível: apenas números inteiros positivos!'
            ],
        ],
        'ano' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Ano: preenchimento obrigatório!',
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => 'Ano: apenas números inteiros positivos!'
            ],
            'maxlength' => [
                'rule' => ['maxlength', 4],
                'message' => 'Ano: deve conter no máximo %d caracteres!',
            ],
        ],
        'ano_modelo' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Ano: preenchimento obrigatório!',
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => 'Ano: apenas números inteiros positivos!'
            ],
            'maxlength' => [
                'rule' => ['maxlength', 4],
                'message' => 'Ano: deve conter no máximo %d caracteres!',
            ],
        ],
        'preco' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Preço: preenchimento obrigatório!',
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => 'Preço: apenas números inteiros positivos!'
            ],
            'money' => [
                'rule' => ['money', 'left'],
                'message' => 'Preço: deve conter um valor monetário válido!',
            ],
        ],
        'quilometragem' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Quilometragem: preenchimento obrigatório!',
            ],
            'naturalNumber' => [
                'rule' => 'naturalNumber',
                'message' => 'Quilometragem: apenas números inteiros positivos!'
            ],
        ],
        'localizacao' => [
            'rule' => 'notBlank'
        ]
    ];

    public function beforeValidate($options = [])
    {
        if (!empty($this->request->data[$this->alias]['nome'])) {
            $this->request->data[$this->alias]['nome'] = trim($this->request->data[$this->alias]['nome']);
        }

        if (!empty($this->request->data[$this->alias]['modelo_id'])) {
            $this->request->data[$this->alias]['modelo_id'] = trim($this->request->data[$this->alias]['modelo_id']);
        }


        if (!empty($this->request->data[$this->alias]['ano'])) {
            $this->request->data[$this->alias]['ano'] = trim($this->request->data[$this->alias]['ano']);
        }

        if (!empty($this->request->data[$this->alias]['ano_modelo'])) {
            $this->request->data[$this->alias]['ano_modelo'] = trim($this->request->data[$this->alias]['ano_modelo']);
        }

        if (!empty($this->request->data[$this->alias]['preco'])) {
            $this->request->data[$this->alias]['preco'] = trim($this->request->data[$this->alias]['preco']);
        }

        if (!empty($this->request->data[$this->alias]['quilometragem'])) {
            $this->request->data[$this->alias]['quilometragem'] = trim($this->request->data[$this->alias]['quilometragem']);
        }

        if (!empty($this->request->data[$this->alias]['localizacao'])) {
            $this->request->data[$this->alias]['localizacao'] = trim($this->request->data[$this->alias]['localizacao']);
        }

        return parent::beforeValidate($options);
    }

    public function totalVersoes()
    {
        return $this->find('count');
    }
}
