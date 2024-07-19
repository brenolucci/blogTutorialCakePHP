<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Versão</h3>
    </div>

    <?= $this->Form->create('Versoes', ['type' => 'file']) ?>

    <div class="card-body">
        <div class="row mt-3">
            <div class="col-12 form-group">
                <?= $this->Form->input('nome', [
                    'label' => __('Nome da versão'),
                    'placeholder' => __('Digite o nome da versão'),
                    'class' => 'form-control',
                ]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 form-group">
                <?= $this->Form->input('ano', [
                    'label' => __('Ano'),
                    'placeholder' => __('Digite o ano de fabricação'),
                    'class' => 'form-control',
                ]) ?>
            </div>
            <div class="col-12 col-md-6 form-group">
                <?= $this->Form->input('ano_modelo', [
                    'label' => __('Ano Modelo'),
                    'placeholder' => __('Digite o ano do modelo'),
                    'class' => 'form-control',
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 form-group">
                <?= $this->Form->input('quilometragem', [
                    'label' => __('Quilometragem'),
                    'placeholder' => __('Digite a quilometragem'),
                    'class' => 'form-control',
                ]) ?>
            </div>
            <div class="col-12 col-md-6 form-group">
                <?= $this->Form->input('preco', [
                    'label' => __('Preço'),
                    'placeholder' => __('Digite o preço'),
                    'class' => 'form-control',
                ]) ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 form-group">
                <?= $this->Form->input('localizacao', [
                    'label' => __('Localização'),
                    'placeholder' => __('Digite a localização'),
                    'class' => 'form-control',
                ]) ?>
            </div>
        </div>


        <div class="form-group">
            <?= $this->Form->input('modelo_id', [
                'options' => $modelos,
                'class' => 'px-2 ml-2'
                ]); ?></>
        </div>
        <div class="form-group">
            <?= $this->Form->input('combutsivel_id', [
                'options' => $combustiveis,
                'class' => 'px-2 ml-2'
                ]); ?></>
        </div>

        <div class="form-group">
            <?= $this->Form->input('files', ['type' => 'file', 'multiple'], [
                'label' => [
                    'text' => __('Foto'),
                    'class' => 'w-100'
                ],
                'multiple' => true,
            ]) ?>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    <?= $this->Form->end() ?>
</div>