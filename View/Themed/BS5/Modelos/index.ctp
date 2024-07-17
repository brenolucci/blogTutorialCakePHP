<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h1>modelos</h1>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome</th>
                            <th>Marca</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $counter = 1; ?>
                        <?php foreach ($modelos as $modelo): ?>
                            <tr>
                                <td><?= $counter++; ?></td>
                                <td><?php
                                echo $this->Html->link(
                                    $modelo['Modelo']['nome'],
                                    ['controller' => 'models', 'action' => 'index', $modelo['Modelo']['id']]
                                );
                                ?></td>
                                <td><?= $modelo['Marca']['nome']; ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>