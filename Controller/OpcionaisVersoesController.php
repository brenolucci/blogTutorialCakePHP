<?php

class OpcionaisVersoesController extends AppController
{
    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $opcionalVersao = $this->OpcionalVersao->findById($id);
        if (!$opcionalVersao) {
            throw new NotFoundException(__('OpcionalVersao não encontrado!'));
        }
        $this->set('opcionalVersao', $opcionalVersao);
    }
}
