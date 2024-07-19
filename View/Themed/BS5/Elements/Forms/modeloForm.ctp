<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Modelo</h3>
    </div>

    <?= $this->Form->create('Modelo') ?>
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <?= $this->Form->input('nome', [
                    'label' => __('Nome do modelo'),
                    'placeholder' => __('Digite o nome do modelo'),
                    'class' => 'form-control',
                ]) ?>
            </div>
        </div>
        <div class="form-group">
            <?= $this->Form->select('marca_id', $marcas); ?></>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    <?= $this->Form->end() ?>
</div>