<?php
class Marca extends AppModel
{
    public $primaryKey = 'id';

    public $displayField = 'nome';

    public $validate = array(
        'nome' => array(
            'rule' => 'notBlank'
        ),
        'versao_id' => array(
            'rule' => 'notBlank'
        )
    );

    public function totalModelo()
    {
        return $this->find('count');
    }
}
