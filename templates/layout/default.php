<?php

use Cake\Core\Configure; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo Configure::read('Theme.title'); ?> | <?php echo $this->fetch('title'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <?php echo $this->Html->css('CakeLte./plugins/fontawesome-free/css/all.min.css'); ?>
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?php echo $this->Html->css('CakeLte./css/adminlte.min.css'); ?>



</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <?php echo $this->Html->image('CakeLte./img/aeLogo.png', ['alt' => 'CakeLte Loho', 'class' => 'animation__shake', 'height' => "60", 'width' => "60"]); ?>

    </div>



    <?php echo $this->element('nav-top'); ?>
    <!-- /.navbar -->
    <?php echo $this->element('aside-main-sidebar'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <?php echo $this->Flash->render(); ?>
      <?php echo $this->Flash->render('auth'); ?>
      <?php echo $this->fetch('content'); ?>

    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->



  <!-- jQuery -->
  <?php echo $this->Html->script('CakeLte./plugins/jquery/jquery.min.js'); ?>


  <!-- jQuery UI 1.11.4 -->
  <?php echo $this->Html->script('CakeLte./plugins/jquery-ui/jquery-ui.min.js'); ?>


  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>


  <!-- Bootstrap -->
  <?php echo $this->Html->script('CakeLte./plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>
  <!-- AdminLTE -->
  <?php echo $this->Html->script('CakeLte./js/adminlte.js'); ?>

  <!-- OPTIONAL SCRIPTS -->
  <?php echo $this->Html->script('CakeLte./plugins/chart.js/Chart.min'); ?>
  <!-- AdminLTE for demo purposes -->
  <?php echo $this->Html->script('CakeLte./js/demo.js'); ?>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <?php echo $this->Html->script('CakeLte./js/pages/dashboard3.js'); ?>






</body>

</html>