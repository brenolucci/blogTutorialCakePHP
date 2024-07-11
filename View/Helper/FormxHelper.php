<?php

App::uses('FormHelper', 'View/Helper');

class FormxHelper extends FormHelper
{
    public function inputNumber($fieldName, $options = [])
    {
        return parent::input(
            $fieldName,
            array_merge(
                $options,
                ['type' => 'number']
            )
        );
    }
    public function inputCpf($fieldName, $options = [])
    {
        return parent::input(
            $fieldName,
            array_merge(
                $options,
                [
                    'type' => 'text',
                    'maxlength' => 14,
                    'class' => 'form-control cpf',
                ]
            )
        );
    }
}