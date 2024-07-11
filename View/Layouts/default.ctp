<?php

?>
<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css([
        'bootstrap.min',
        'jquery.min'
    ]);
    echo $this->Html->script([
        'jquery.min',
        'bootstrap.min',
    ]);

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>

<body>
    <div id="container">
        <div id="header">
        </div>
        <div id="content">

            <?php echo $this->Flash->render(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
            <?php echo $this->Html->link(
                $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                'https://cakephp.org/',
                array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
            );
            ?>
        </div>
    </div>
</body>

</html>