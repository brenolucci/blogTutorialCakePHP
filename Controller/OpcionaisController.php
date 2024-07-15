<?php

class OpcionaisController extends AppController
{
    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Referência inválida!'));
        }

        $opcionais = $this->Opcionais->findById($id);
        if (!$opcionais) {
            throw new NotFoundException(__('Opcionais não encontrados!'));
        }
        $this->set('opcionais', $opcionais);
    }
}
