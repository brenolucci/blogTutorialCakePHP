<?php

class ModelosController extends AppController
{
    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $modelo = $this->Modelo->findById($id);
        if (!$modelo) {
            throw new NotFoundException(__('Modelo não encontrado!'));
        }
        $this->set('modelo', $modelo);
    }
}
