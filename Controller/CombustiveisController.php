<?php

class CombustiveisController extends AppController
{
    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Referência inválida!'));
        }

        $combustivel = $this->Combustivel->findById($id);
        if (!$combustivel) {
            throw new NotFoundException(__('Combustivel não encontrado!'));
        }
        $this->set('combustivel', $combustivel);
    }
}
