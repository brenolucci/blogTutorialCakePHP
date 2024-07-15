<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Marca</h3>
    </div>
    <?= $this->Form->create('Marca') ?>
    <div class="card-body">
        <div class="form-group">
            <?= $this->Form->input('nome', [
                'label' => "Nome da marca",
                'class' => "form-control",
                'name' => "nome",
                'placeholder' => "Digite o nome da marca",
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('nome-do-campo', [
                'label' => [
                    'text' => __('Logomarca'),
                    'class' => 'w-100'
                ],
                'name' => "nomeDoCampo",
                'type' => 'file',
                'multiple' => true,
            ]) ?>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    <?= $this->Form->end() ?>
</div>