<?php

class ModelosController extends AppController
{
    public function index()
    {
        $this->Modelo->Behaviors->load('Containable');
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
        $this->Modelo->Behaviors->load('Containable');
        $this->set('marcas', $this->Marca->find('list', [
            'contain' => 'Marca.nome, Marca.id'
        ]));
        if ($this->request->is('post')):
            if ($this->Modelo->save($this->request->data)) {
                $this->Flash->success(__('Modelo salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
        endif;
    }
}
