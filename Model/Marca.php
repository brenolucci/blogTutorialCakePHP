<?php

class Marca extends AppModel
{
    public $name = 'Marca';

    public $primaryKey = 'id';

    public $displayField = 'nome';

    // public $hasOne = [];

    // public $belongsTo = [];

    public $hasMany = [
        'Modelo' => [
            'className' => 'Modelo',
            'foreignKey' => 'marca_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => [], // Condições adicionais na montagem do JOIN
            'dependent' => true, // Exclusivo para hasMany
        ],
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
                'message' => 'Nome: marca já registrada!'
            ],
        ],
        'logo_url' => [
            'rule' => 'notBlank',
        ],
    ];

    /**
     * Callback executado antes de validar os dados
     * 
     * @param array $options
     * @return bool
     */
    public function beforeValidate($options = [])
    {
        if (!empty($this->request->data[$this->alias]['nome'])) {
            $this->request->data[$this->alias]['nome'] = trim($this->request->data[$this->alias]['nome']);
        }

        if (!empty($this->request->data[$this->alias]['logo_url'])) {
            $this->request->data[$this->alias]['logo_url'] = trim($this->request->data[$this->alias]['logo_url']);
        }

        return parent::beforeValidate($options);
    }

    /**
     * Callback executado antes de salvar os dados
     * 
     * @param array $options
     * @return bool
     */
    public function beforeSave($options = [])
    {
        // if (!empty($this->request->data[$this->alias]['ds_nome'])) {
        //     $this->request->data[$this->alias]['ds_nome'] = trim($this->request->data[$this->alias]['ds_nome']);
        // }

        return parent::beforeSave($options);
    }

    public function totalMarcas()
    {
        return $this->find('count');
    }
}
