<?php

class VersoesController extends AppController
{
    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $versao = $this->Versao->findById($id);
        if (!$versao) {
            throw new NotFoundException(__('Versao não encontrada!'));
        }
        $this->set('versao', $versao);
    }
}
