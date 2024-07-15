<?php

class MarcasController extends AppController
{
    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $marca = $this->Marca->findById($id);
        if (!$marca) {
            throw new NotFoundException(__('Invalid marca'));
        }
        $this->set('marca', $marca);
    }
}
