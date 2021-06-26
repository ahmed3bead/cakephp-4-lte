<?php $this->layout = 'collapsed'; ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sidebar Collapsed
        <small>Layout with collapsed sidebar on load</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Collapsed Sidebar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
        <h4>Tip!</h4>

        <p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with a
          fixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretched
          vertically.</p>
      </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Title</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
