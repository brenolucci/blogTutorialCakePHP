<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Marca</h3>
    </div>
    <?= $this->Form->create('Marca', ['type' => 'file']) ?>
    <div class="card-body">
        <div class="form-group">
            <?= $this->Form->input('nome', [
                'label' => __('Nome da marca'),
                'placeholder' => __('Digite o nome da marca'),
                'class' => 'form-control',
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('files', [
                'label' => [
                    'text' => __('Logomarca'),
                    'class' => 'w-100'
                ],
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