<?php

use Cake\Core\Configure; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo Configure::read('CakephpLteTheme.title'); ?> | <?php echo $this->fetch('title'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <?php echo $this->Html->css('CakephpLte./plugins/fontawesome-free/css/all.min.css'); ?>
  <!-- Ionicons -->
  <!-- Theme style -->
  <?php echo $this->Html->css('CakephpLte./css/adminlte.min.css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->

  <?php echo $this->fetch('css'); ?>

</head>

<body class="hold-transition lockscreen">
  <!-- Automatic element centering -->


  <div class="lockscreen-wrapper">


    <div class="lockscreen-logo">
      <img width="150" src="<?php echo Configure::read('CakephpLteCakephpLteTheme.logo.image') ?>" alt="<?php echo Configure::read('CakephpLteCakephpLteTheme.title') ?>" class="src">
    </div>

  
    <!-- User name -->
    <div class="lockscreen-name">
      <h1><?php echo Configure::read('CakephpLteCakephpLteTheme.title') ?></h1>
      <a href="<?php echo $this->Url->build('/admin'); ?>"><span>Admin Area</span></a> | 
      <a href="<?php echo $this->Url->build('/call-center'); ?>"><span>Call Center</span></a> | 
      <a href="#<?php //echo $this->Url->build('/technical-support'); ?>"><span>Technical Support</span></a>  

      
    </div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
      <!-- lockscreen image -->


    </div>
    <!-- /.lockscreen-item -->

  </div>
  <!-- /.center -->

  <!-- /.center -->

  <!-- jQuery 3 -->
  <?php echo $this->Html->script('CakephpLte./plugins/jquery/jquery.min.js'); ?>
  <!-- Bootstrap 3.3.7 -->
  <?php echo $this->Html->script('CakephpLte./plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>
</body>

</html>