<?php $this->disableAutoLayout(); ?>


<!DOCTYPE html>
<html>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <?php echo $this->Html->css('CakephpLte./plugins/fontawesome-free/css/all.min.css'); ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <?php echo $this->Html->css('CakephpLte./css/adminlte.min.css'); ?>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Bootstrap 4 rtl -->
    <?php echo $this->Html->css('https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css'); ?>
    <!-- Custom CSS rtl -->
    <?php echo $this->Html->css('CakephpLte./css/rtl.css'); ?>
    <?php echo $this->Html->css('CakephpLte./css/cairo.css'); ?>
    <style type="text/css">
        .buttons-print {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0;
        }

        .buttons-excel,
        .buttons-csv {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 0;
        }

        .buttons-pdf,
        .deleteBtn {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 0;
        }

        .buttons-reload {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
            border-radius: 0;
        }

        .table-responsive {
            min-height: 400px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">الرئيسيه</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">اتصل بنا</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="بحث" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto-navbav">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right messagesBox">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <?= $this->Html->image('CakephpLte./img/user2-160x160.jpg', ['alt' => 'User Image', 'class' => 'img-size-50 mr-3 img-circle']); ?>

                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">كلمنى شكرا</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 ساعات</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">كل الرسائل</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">12</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right notificationsBox">
                        <span class="dropdown-item dropdown-header">12 إشعار</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 رسائل جديدة
                            <span class="float-right text-muted text-sm">3 دقائق</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 اى حاجه
                            <span class="float-right text-muted text-sm">12 ساعة</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">مشاهدة الكل</a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <?php echo $this->Html->image('CakephpLte./img/aeLogo.png', ['alt' => 'CakephpLte Loho', 'class' => 'animation__shake', 'height' => "60", 'width' => "60"]); ?>
                <span class="brand-text font-weight-light">اسم الموقع</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <?= $this->Html->image('CakephpLte./img/user2-160x160.jpg', ['alt' => 'User Image', 'class' => 'img-circle elevation-2']); ?>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">احمد عبيد</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    تجربة القائمة
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>قائمة 1</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">اسم الصفحة</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                <li class="breadcrumb-item active">اسم الصفحة</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>الطلبات الجديدة</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>المكسب</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>الاعضاء الجدد</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>زيارات الموقع</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                    <!-- content here -->




                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
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
    <?php echo $this->Html->script('CakephpLte./plugins/jquery/jquery.min.js'); ?>


    <!-- jQuery UI 1.11.4 -->
    <?php echo $this->Html->script('CakephpLte./plugins/jquery-ui/jquery-ui.min.js'); ?>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>



    <!-- Bootstrap -->
    <?php echo $this->Html->script('CakephpLte./plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>

    <!-- Bootstrap 4 rtl -->
    <?php echo $this->Html->script('CakephpLte./js/bootstrap.rtl.min.js'); ?>

    <?php echo $this->Html->script('CakephpLte./js/adminlte.js'); ?>

</body>

</html>