<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset(); ?>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css([
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    ]);
    echo $this->Html->script([
        'jquery.min',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    ]);

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>

<body>
    <div id="container">
        <div id="header"><?= $this->element('navbar') ?>
        </div>
        <div id="content">

            <?= $this->Flash->render(); ?>

            <?= $this->fetch('content'); ?>
        </div>
        <div id="footer">
            <?= $this->Html->link(
                $this->Html->image('cake.power.gif', array('alt' => 'CakeLogo', 'border' => '0')),
                'https://cakephp.org/',
                ['target' => '_blank', 'escape' => false, 'id' => 'cake-powered']
            ) ?>
        </div>
    </div>
</body>

</html>