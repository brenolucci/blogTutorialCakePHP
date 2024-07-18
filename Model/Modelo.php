<?php
class Modelo extends AppModel
{
    public $name = 'Modelo';
    public $primaryKey = 'id';

    public $displayField = 'nome';

    public $belongsTo = [
        'Marca' => [
            'className' => 'Marca',
            'foreignKey' => 'marca_id',
            'type' => 'INNER',
            'fields' => [],
            'conditions' => [],
        ]
    ];

    public $hasMany = [
        'Versao' => [
            'className' => 'Versao',
            'foreignKey' => 'modelo_id',
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
            'isUnique' => [
                'rule' => 'isUnique',
                'message' => 'Nome: modelo já registrado!'
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


    public function totalModelos()
    {
        return $this->find('count');
    }
}
