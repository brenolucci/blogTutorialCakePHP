<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title'); ?>
    </title>
    <?= $this->Html->css([
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        '/plugins/fontawesome-free/css/all.min',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        '/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min',
        '/plugins/icheck-bootstrap/icheck-bootstrap.min',
        '/plugins/jqvmap/jqvmap.min',
        'adminlte.min',
        '/plugins/overlayScrollbars/css/OverlayScrollbars.min',
        '/plugins/daterangepicker/daterangepicker',
        '/plugins/summernote/summernote-bs4.min'
    ]) ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php
        echo $this->element('Layout/preloader');
        echo $this->element('Layout/topnav');
        echo $this->element('Layout/menulateral');

        echo $this->fetch('content');
        echo $this->element('Layout/rodape');
        ?>
    </div>

    <?= $this->Html->script([
        '/plugins/jquery/jquery.min',
        '/plugins/jquery-ui/jquery-ui.min',
    ]);
    ?>

    <?=
        $this->Html->script([
            '/plugins/bootstrap/js/bootstrap.bundle.min',
            '/plugins/chart.js/Chart.min',
            '/plugins/sparklines/sparkline',
            '/plugins/jqvmap/jquery.vmap.min',
            '/plugins/jqvmap/maps/jquery.vmap.usa',
            '/plugins/jquery-knob/jquery.knob.min',
            '/plugins/moment/moment.min',
            '/plugins/daterangepicker/daterangepicker',
            '/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min',
            '/plugins/summernote/summernote-bs4.min',
            '/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min',
            'adminlte',
            'demo',
            'pages/dashboard'
        ]);
    ?>
</body>