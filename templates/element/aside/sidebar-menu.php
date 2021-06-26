      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item menu-open">
            <a href="<?php echo $this->Url->build('/'); ?>" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Home</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Inventory
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $this->Url->build('/products'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Products</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sales reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $this->Url->build('/invoices/profits'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoices Profits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $this->Url->build('/invoices/losses'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoices Losses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $this->Url->build('/invoices/productProfits'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products Profits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $this->Url->build('/invoices/categoryProfits'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Profits</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Returns
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $this->Url->build('/returns'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Returns</p>
                </a>
              </li>


            </ul>
          </li>




          <li class="nav-item">
            <a href="<?php echo $this->Url->build('/pages/debug'); ?>" class="nav-link">
              <i class="fa fa-bug nav-icon"></i>
              <p>Debug</p>
            </a>
          </li>



        </ul>
      </nav>