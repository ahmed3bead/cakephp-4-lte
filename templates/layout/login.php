<?php

use Cake\Core\Configure; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo Configure::read('CakephpLteTheme.title'); ?> | <?php echo $this->fetch('title'); ?></title>


  <?php echo $this->Html->css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'); ?>
  <?php echo $this->Html->css('CakephpLte./plugins/fontawesome-free/css/all.min.css'); ?>
  <?php echo $this->Html->css('CakephpLte./plugins/icheck-bootstrap/icheck-bootstrap.min'); ?>
  <?php echo $this->Html->css('CakephpLte./css/adminlte.min'); ?>


  <?php echo $this->fetch('css'); ?>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a class="h1" href="<?php echo $this->Url->build(); ?>"><?php echo Configure::read('CakephpLteCakephpLteTheme.logo.large') ?></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>
 <?php echo $this->Flash->render(); ?>
      <?php echo $this->Flash->render('auth'); ?>
        <?php echo $this->fetch('content'); ?>


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->



  <?php echo $this->Html->script('CakephpLte./plugins/jquery/jquery.min'); ?>
  <?php echo $this->Html->script('CakephpLte./plugins/bootstrap/js/bootstrap.bundle.min'); ?>
  <?php echo $this->Html->script('CakephpLte.adminlte.min'); ?>


  <?php echo $this->fetch('script'); ?>

</body>

</html>
