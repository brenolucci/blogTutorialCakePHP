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

    public function add()
    {
        try {

            // Carrega o select de modelos no form.
            $this->loadModel('Modelo');
            $this->set('modelos', $this->Modelo->find('list', [
                'fields' => 'Modelo.id, Modelo.nome'
            ]));

            // Carrega o select de combustíveis no form.
            $this->loadModel('Combustivel');
            $this->set('combustiveis', $this->Combustivel->find('list', [
                'fields' => 'Combustivel.id, Combustivel.nome'
            ]));

            // Começa uma transaction
            $dataSource = $this->Versao->getDataSource();
            $dataSource->begin();

            if ($this->request->is('post')):
                $files = $this->request->data['Versoes']['files'];
                unset($this->request->data['Versoes']['files']);

                // pr($this->request->data['Versoes']);

                // die;
                if ($this->Versao->save($this->request->data['Versoes'])) {
                    $this->Flash->success(__('Versão salva com sucesso.'));
                    return $this->redirect(['action' => 'index']);
                }
            endif;








        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
