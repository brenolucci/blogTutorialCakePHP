<?php

class ModelosController extends AppController
{
    public function index()
    {
        $this->set('modelos', $this->Modelo->find('all', [
            'contain' => 'Marca.nome'
        ]));
    }

    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Modelo inválido!'));
        }

        $modelo = $this->Modelo->findById($id);
        if (!$modelo) {
            throw new NotFoundException(__('Modelo não encontrado!'));
        }
        $this->set('modelo', $modelo);
    }

    public function add()
    {
        $this->loadModel('Marca');
        $this->set('marcas', $this->Marca->find('list', [
            'fields' => 'Marca.id, Marca.nome'
        ]));
        if ($this->request->is('post')):
            if ($this->Modelo->save($this->request->data)) {
                $this->Flash->success(__('Modelo salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
        endif;
    }
}
