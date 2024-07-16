<?php

define('FILES_DIR', WWW_ROOT . 'img' . DS);

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
        if ($this->request->is('post')):

            if (empty($this->request->data['Marca']['files'])):
                throw new \InvalidArgumentException('Nenhum arquivo enviado!', 422);
            endif;

            pr($this->request->data['Marca']['files']['tmp_name']);

            $tmpName = $this->request->data['Marca']['files']['tmp_name'];
            if (!is_uploaded_file($tmpName)):
                throw new Exception('Arquivo inválido para upload: ' . error_get_last(), 422);
            endif;

            $extensao = strtolower(pathinfo($this->request->data['Marca']['files']['name'], PATHINFO_EXTENSION));
            if (!in_array($extensao, ['jpg', 'jpeg', 'webp', 'png', 'gif', 'tiff'])):
                throw new Exception('Formato de arquivo inválido!', 422);
            endif;

            $created = new \DateTime();
            $filepath = FILES_DIR . $created->format('Y') . DS . $created->format('m') . DS;

            $dir = '';
            $dir .= $filepath;

            if (file_exists($dir) === false):
                if (mkdir($dir, 0775, true) === false):
                    throw new Exception("Falha criando o diretório {$dir} no servidor!", 400);
                endif;
            endif;

            $newName = uniqid(time()) . '.' . $extensao;
            if (
                $this->Marca->save([
                    'nome' => $this->request->data['Marca']['nome'],
                    'logo_url' => $newName
                ])
            ) {
                $this->Flash->success(__('Your marca has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            if (move_uploaded_file($tmpName, $dir . $newName) === false):
                throw new Exception("Falha movendo o arquivo {$this->request->data['Marca']['files']['name']} para o servidor com o novo nome {$newName}!");
            endif;

        endif;
    }
}
