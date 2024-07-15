<?php

class MarcasController extends AppController
{
    public function index()
    {
        $this->set('marcas', $this->Marca->find('all'));
    }

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

    public function add()
    {
        if ($this->Marca->save($this->request->data)) {
            $this->Flash->success(__('Your marca has been saved.'));
            return $this->redirect(['action' => 'index']);
        }

    }
}
