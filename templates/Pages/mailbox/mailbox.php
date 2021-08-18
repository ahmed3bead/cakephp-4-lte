<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small>13 new messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'compose']); ?>" class="btn btn-primary margin-bottom">Compose</a>

          <div class="card card-solid">
            <div class="card-header with-border">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-card-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /. box -->
          <div class="card card-solid">
            <div class="card-header with-border">
              <h3 class="card-title">Labels</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-card-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Inbox</h3>

              <div class="card-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body no-padding">
              <div class="mailcard-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkcard-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailcard-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"></td>
                    <td class="mailcard-date">5 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">28 mins ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">11 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"></td>
                    <td class="mailcard-date">15 hours ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">Yesterday</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"></td>
                    <td class="mailcard-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"></td>
                    <td class="mailcard-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"></td>
                    <td class="mailcard-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">4 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"></td>
                    <td class="mailcard-date">12 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">12 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">14 days ago</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailcard-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailcard-name"><a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'display', 'mailbox', 'read-mail']); ?>">Alexander Pierce</a></td>
                    <td class="mailcard-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailcard-attachment"><i class="fa fa-paperclip"></i></td>
                    <td class="mailcard-date">15 days ago</td>
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-card-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer no-padding">
              <div class="mailcard-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkcard-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<!-- iCheck -->
<?php echo $this->Html->css('AdminLTE./plugins/iCheck/flat/blue', ['block' => 'css']); ?>

<!-- iCheck -->
<?php echo $this->Html->script('AdminLTE./plugins/iCheck/icheck.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailcard-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkcard-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailcard-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailcard-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailcard-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<?php $this->end(); ?>