<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <h1>Marcas</h1>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome</th>
                            <th style="width: 40px">Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>
                        <?php foreach ($marcas as $marca): ?>
                            <tr>
                                <td><?= $counter++; ?></td>
                                <td><?php
                                echo $this->Html->link(
                                    $marca['Marca']['nome'],
                                    ['controller' => 'models', 'action' => 'index', $marca['Marca']['id']]
                                );
                                ?></td>
                                <td><?= $marca['Marca']['logo_url'] ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>