<?php

class ImagensController extends AppController
{
    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Referência inválida!'));
        }

        $imagem = $this->Imagem->findById($id);
        if (!$imagem) {
            throw new NotFoundException(__('Imagem não encontrada!'));
        }
        $this->set('imagem', $imagem);
    }
}
