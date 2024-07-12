<?php

class Marca extends AppModel
{
    public $primaryKey = 'id';

    public $displayField = 'nome';

    public $validate = array(
        'nome' => array(
            'rule' => 'notBlank'
        ),
        'logo_url' => array(
            'rule' => 'notBlank'
        )
    );

    public function totalMarcas()
    {
        return $this->find('count');
    }
}
