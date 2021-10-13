<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"><?= $this->fetch('title') ?></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <?php
        $local = \Cake\I18n\I18n::getLocale();
        ?>
        <ol class="breadcrumb <?= ($local != 'en' && $local != 'en_US') ? 'float-sm-left' : 'float-sm-right' ?>">
          <li class="breadcrumb-item"><a href="<?= $this->Url->build('/') ?>"><?= __('Home') ?></a></li>
          <li class="breadcrumb-item active"><?= __(isset($pageHead) ? $pageHead : $this->fetch('title')) ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->