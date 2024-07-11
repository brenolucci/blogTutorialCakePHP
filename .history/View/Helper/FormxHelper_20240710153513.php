<?php

App::uses('FormHelper', 'View/Helper');

class FormxHelper extends FormHelper
{
    public $helpers = ['Form'];

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
}