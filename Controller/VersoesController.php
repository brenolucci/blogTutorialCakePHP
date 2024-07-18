<?php


class VersoesController extends AppController
{
    public $uses = ['Versao'];


    public function index()
    {

        $this->Versao->bindModelMarca();

        $this->set('versoes', $this->Versao->find('all', [
            'fields' => [],
            'contain' => [
                'Modelo' => [
                    'fields' => ['id', 'nome'],
                ],
                'Marca' => [
                    'fields' => ['id', 'nome'],
                ],
            ],
            'conditions' => [],
            'recursive' => -1,
        ]));
    }

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
