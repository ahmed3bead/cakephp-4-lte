      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         

        <li class="nav-item">
            <a href="<?php echo $this->Url->build('/'); ?>" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Home</p>
            </a>
          </li>


          <li class="nav nav-treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Inventory</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo $this->Url->build('/products'); ?>"><i class="fa fa-circle-o"></i> List Products</a></li>

            </ul>
          </li>

          <li class="nav nav-treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Sales reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo $this->Url->build('/invoices/profits'); ?>"><i class="fa fa-circle-o"></i>Invoices Profits</a></li>
              <li><a href="<?php echo $this->Url->build('/invoices/losses'); ?>"><i class="fa fa-circle-o"></i>Invoices Losses</a></li>

              <li><a href="<?php echo $this->Url->build('/invoices/productProfits'); ?>"><i class="fa fa-circle-o"></i>Products Profits</a></li>
              <li><a href="<?php echo $this->Url->build('/invoices/productLosses'); ?>"><i class="fa fa-circle-o"></i>Products Losses</a></li>

            </ul>

          </li>
          <li class="nav nav-treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Returns</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo $this->Url->build('/returns'); ?>"><i class="fa fa-circle-o"></i>List Returns</a></li>
            </ul>
          </li>

          <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span>Debug</span></a></li>


        </ul>
      </nav>