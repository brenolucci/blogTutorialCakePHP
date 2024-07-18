<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h1>Versões</h1>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Versão</th>
                            <th>Preço</th>
                            <th>Ano/Modelo</th>
                            <th>Quilometragem</th>
                            <th>Localização</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>
                        <?php foreach ($versoes as $versao): ?>
                            <tr>
                                <td><?= $versao['Versao']['id'] ?></td>
                                <td><?= strtoupper($versao['Marca']['nome']) . ' ' . strtoupper($versao['Modelo']['nome']) . ' ' . $versao['Versao']['nome'] ?>
                                </td>
                                <td><?= 'R$ ' . number_format($versao['Versao']['preco'], 2, ',', '.') ?> </td>
                                <td><?= $versao['Versao']['ano'] . '/' . $versao['Versao']['ano_modelo']; ?></td>
                                <td><?= number_format($versao['Versao']['quilometragem'], 0, '', '.') . ' km' ?></td>
                                <td><?= strtoupper($versao['Versao']['localizacao']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>