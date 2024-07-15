<?php

class Imagem extends AppModel
{
    public $name = 'Imagem';

    public $primaryKey = 'id';

    public $displayField = 'nome';

    public $belongsTo = [
        'Versao' => [
            'className' => 'Versao',
            'foreignKey' => 'versao_id',
            'type' => 'LEFT',
            'fields' => [],
            'conditions' => []
        ]
    ];

    public $validate = [
        'image' => [
            'rule' => [
                'extension',
                ['gif', 'jpeg', 'png', 'jpg', 'webp']
            ],
            'message' => 'Imagem: formato inválido!'
        ]
    ];

    public function beforeValidate($options = [])
    {
        if (!empty($this->request->data[$this->alias]['image'])) {
            $this->request->data[$this->alias]['image'] = trim($this->request->data[$this->alias]['image']);
        }

        return parent::beforeValidate($options);
    }
}
